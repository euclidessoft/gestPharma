<?php

namespace App\Controller;

use App\Entity\Vente;
use App\Entity\VenteProduit;
use App\Entity\Stock;
use App\Form\VenteType;
use App\Repository\VenteRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Doctrine\ORM\EntityManagerInterface;

#[Route("/vente")]
class VenteController extends 
 AbstractController
{   public function __construct(private Security $security, private EntityManagerInterface $entityManager)
    {
    }
    #[Route("/", name:"vente_index", methods:["GET"])]
    public function index(VenteRepository $venteRepository): Response
    {
        return $this->render('vente/index.html.twig', [
            'ventes' => $venteRepository->findAll(),
        ]);
    }

    #[Route("/new", name:"vente_new", methods:["GET","POST"])]
    public function new(Request $request, ProduitRepository $produitRepository,SessionInterface $session): Response
    {
        $entityManager =$this->entityManager;
        $vente = new Vente();
        $montantvente = 0;
        $form = $this->createForm(VenteType::class, $vente);
        $form->handleRequest($request);

        if (!$form->isSubmitted()){
            $session->remove("commande");
            $session->remove("total");
        }

        if ($form->isSubmitted() && $form->isValid()) {// traitement de la vente apres soumission
            $commandesession = $session->get("commande", []);

            $entityManager->persist($vente);
            if (count($commandesession) >= 1) {

                foreach ($commandesession as $ligne) {
                    $product = explode("/", $ligne);
                    $id = $product[0];
                    $quantite = $product[1];
                    $produit = $produitRepository->find($id);
                    $stockproduit = $entityManager->getRepository(Stock::class)->findBy(['produit' => $id], ['peremption' => "ASC"]);

                    if (count($stockproduit) > 1){// existance de different lot

                        foreach ($stockproduit as $stock) {

                            if (($stock->getQuantite() - $quantite) >= 0) {// livraison avec un stock suffisant

                                $produit->livraison($quantite);
                                $stock->setQuantite($stock->getQuantite() - $quantite);

                                $montantvente = $montantvente + ($quantite * $produit->getPrix());// calcul du montant de la vente

                                if ($stock->getQuantite() == 0) {//suppression produit dans stock
                                    $entityManager->remove($stock);
                                } else {
                                    $entityManager->persist($stock);
                                }
                                break;

                            }else if (($stock->getQuantite() - $quantite) < 0) {// livraison avec un stock insuffisant ou sur des lot different

                                $produit->livraison($stock->getQuantite());

                                $stock->setQuantite($stock->getQuantite() - $stock->getQuantite());
                                $quantite= $quantite - $stock->getQuantite();

                                $montantvente = $montantvente + ($quantite * $produit->getPrix());// calcul du montant de la vente

                                if ($stock->getQuantite() == 0) {//suppression produit dans stock
                                    $entityManager->remove($stock);
                                } else {
                                    $entityManager->persist($stock);
                                }

                            }
                        }

                    }
                    else{ // traitement cas d'un seul lot
                        $stock = $entityManager->getRepository(Stock::class)->findOneBy(['produit' => $id]);
                        if (($stock->getQuantite() - $quantite) >= 0) {

                            $produit->livraison($quantite);
                            $stock->setQuantite($stock->getQuantite() - $quantite);
                            $montantvente = $montantvente + ($quantite * $produit->getPrix());// calcul du montant de la vente

                            //MAJ produit dans stock
                            if ($stock->getQuantite() == 0) {
                                $entityManager->remove($stock);
                            } else {
                                $entityManager->persist($stock);
                            }
                        }
                    }

                    $venteProduit = new VenteProduit();
                    $venteProduit->setVente($vente);
                    $venteProduit->setPrix($produit->getPrix());
                    $venteProduit->setProduit($produit);
                    $venteProduit->setQuantite($quantite);
                    $entityManager->persist($venteProduit);

                    //$entityManager->flush();
                }
                if($vente->getMutuel())// verification prise en charge
                    $vente->setMontant($montantvente - ($montantvente * $vente->getService()->getType() / 100));
                else
                    $vente->setMontant($montantvente);
                $entityManager->persist($vente);
                $entityManager->flush();
                $session->remove("commande");
            }

            $entityManager->flush();


            $this->addFlash('notice', 'Vente effectuee avec succes');
//            terminer:{
//                $this->addFlash('danger', 'vente non effectuee succes');
//            }
            $response = $this->redirectToRoute('vente_new');
            $response->setSharedMaxAge(0);
            $response->headers->addCacheControlDirective('no-cache', true);
            $response->headers->addCacheControlDirective('no-store', true);
            $response->headers->addCacheControlDirective('must-revalidate', true);
            $response->setCache([
                'max_age' => 0,
                'private' => true,
            ]);

            return $response;




        }

        $response = $this->render('vente/new.html.twig', [
            'produits' => $produitRepository->findAll(),
            'commande' => $session->get('commande', []),
            'form' => $form->createView(),
        ]);
        $response->setSharedMaxAge(0);
        $response->headers->addCacheControlDirective('no-cache', true);
        $response->headers->addCacheControlDirective('no-store', true);
        $response->headers->addCacheControlDirective('must-revalidate', true);
        $response->setCache([
            'max_age' => 0,
            'private' => true,
        ]);
        return $response;
    }


    #[Route("/Add", name:"commande_produit_add", methods:["GET","POST"])]
    public function add(Request $request, ProduitRepository $produitRepository, SessionInterface $session)
    {
        // On récupère le panier actuel
        $commande = $session->get("commande", []);
        if ($request->isXmlHttpRequest()) {// traitement de la requete ajax
            $id = $request->get('produit');// recuperation de id produit
            $quantite = $request->get('quantite');// recuperation de la quantite commamde
            foreach ($commande as $key => $item) {
                $ligne = explode("/",$item);
                if ($ligne[0] == $id) {
                    $res['id'] = 'Un produit avec les même reference a été ajouté';
                    goto suite;
                }
            }
            $produit = $produitRepository->find($id); // recuperation de id produit dans la db
//            if (empty($approv[$id])) {//verification existance produit dans le panier

            $chaine = $id."/".$quantite."/".$produit->getPrix();

            $commande[] = $chaine;

            // On sauvegarde dans la session
            $session->set("commande", $commande);
            $session->set("total", $session->get('total') +($quantite * $produit->getPrix())); //calcule pour la vente

            //preparation valeur de retour ajax
            $res['id'] = 'ok';
            $res['ref'] = $produit->getReference();
            $res['prix'] = $produit->getPrix();
            $res['designation'] = $produit->getDesignation();
            $res['quantite'] = $quantite;//$produit->getQuantite();
            $res['total'] = $session->get('total');

            suite:
            $response = new Response();
            $response->headers->set('content-type', 'application/json');
            $re = json_encode($res);
            $response->setContent($re);
            return $response;
        }

    }


    #[Route("/Delete", name:"commande_produit_delete", methods:["GET","POST"])]
    public function deleteproduit(Request $request, ProduitRepository $repository, SessionInterface $session)
    {
        // On récupère le panier actuel
        $commande = $session->get("commande", []);
        $id = $request->get('produit');
        foreach ($commande as $key => $item) {
            $ligne = explode("/",$item);
            if ($ligne[0] == $id) {
                unset($commande[$key]);
                $session->set("total", $session->get('total') - ($ligne[1] * $ligne[2]));// suppression a la vente
            }
        }

        // On sauvegarde dans la session
        $session->set("commande", $commande);



        $res['id'] = 'ok';
        $res['nb'] = count($commande);
        $res['total'] = $session->get('total');// total facture
        $response = new Response();
        $response->headers->set('content-type', 'application/json');
        $re = json_encode($res);
        $response->setContent($re);
        return $response;
    }

    #[Route("/{id}", name:"vente_show", methods:["GET"])]
    public function show(Vente $vente): Response
    {
        return $this->render('vente/show.html.twig', [
            'vente' => $vente,
        ]);
    }

    #[Route("/{id}/edit", name:"vente_edit", methods:["GET","POST"])]
    public function edit(Request $request, Vente $vente): Response
    {
        $form = $this->createForm(VenteType::class, $vente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            return $this->redirectToRoute('vente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('vente/edit.html.twig', [
            'vente' => $vente,
            'form' => $form->createView(),
        ]);
    }

    #[Route("/{id}", name:"vente_delete", methods:["POST"])]
    public function delete(Request $request, Vente $vente): Response
    {
        if ($this->isCsrfTokenValid('delete'.$vente->getId(), $request->request->get('_token'))) {
            $entityManager = $this->entityManager;
            $entityManager->remove($vente);
            $entityManager->flush();
        }

        return $this->redirectToRoute('vente_index', [], Response::HTTP_SEE_OTHER);
    }
}
