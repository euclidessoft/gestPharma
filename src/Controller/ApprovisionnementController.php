<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\CommandeProduit;
use App\Entity\FactureFournisseur;
use App\Entity\Fournisseur;
use App\Entity\Produit;
use App\Entity\Stock;
use App\Repository\CommandeProduitRepository;
use App\Repository\CommandeRepository;
use App\Repository\FournisseurRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\SecurityBundle\Security;

#[Route("/Achat" , name :"stock_") ]
class ApprovisionnementController extends AbstractController
{
      public function __construct(private Security $security, private EntityManagerInterface $entityManager)
    {
    }

    #[Route("/Commande/{id}", name :"appro_index", methods : ["GET"]) ]
    public function index(Fournisseur $fournisseur, SessionInterface $session, CommandeProduitRepository $CommandeProduitRepository, ProduitRepository $produitRepository, FournisseurRepository $fournisseurRepository): Response
    {

        if ($this->security->isGranted('ROLE_USER')) {
            $produits = $produitRepository->achat();

            $approv = $session->get("approv", []);
            $dataPanier = [];
            $total = 0;

//            foreach ($approv as $commande) {
//                $dataPanier[] = [
//                    "produit" => $commande['produit'],
//                ];
//            }

            foreach ($approv as $key => $item) {// ffabrication des donnees dans la session pour affichage
                $ligne = explode("/",$item);
                $produit = $produitRepository->find($ligne[0]);
                $dataPanier[]= [
                 'idtab' => $key,
                'id' => $ligne[0],
                'designation' => $produit->getDesignation(),
                'reference' => $produit->getReference(),
                'prix' => $produit->getPrixdachat(),
                'quantite' => $ligne[1],
                    ];
            }

            $response = $this->render('approvisionnement/index.html.twig', [
                'approvisionnements' => $CommandeProduitRepository->findAll(),
                'fournisseur' => $fournisseur,
                'panier' => $dataPanier,
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
        } else {
            $response = $this->redirectToRoute('security_login');
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
    }

    #[Route("/Historique/", name :"historique", methods : ["GET"]) ]
    public function historique(CommandeRepository $repository, FournisseurRepository $repo): Response
    {
        if ($this->security->isGranted('ROLE_USER')) {

            $response = $this->render('approvisionnement/historique.html.twig', [
                'approvisionnements' => $repository->findAll(),
                'fournisseurs' => $repo->findAll(),
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
        } else {
            $response = $this->redirectToRoute('security_login');
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
    }


    #[Route("/add/", name :"appro_add") ]
    public function add(Request $request, ProduitRepository $produitRepository, FournisseurRepository $fournisseurRepository, SessionInterface $session)
    {
        // On récupère le panier actuel
        $approv = $session->get("approv", []);
        if ($request->isXmlHttpRequest()) {// traitement de la requete ajax
            $id = $request->get('prod');// recuperation de id produit
            $quantite = $request->get('quantite');// recuperation de la quantite commamde
            foreach ($approv as $key => $item) {
                $ligne = explode("/",$item);
                if ($ligne[0] == $id) {
                    $res['id'] = 'Un produit avec les même reference a été ajouté';
                    goto suite;
                }
            }
            $produit = $produitRepository->find($id); // recuperation de id produit dans la db

            $chaine = $id."/".$quantite;

//            $produit->setQuantite($quantite);
//            $produit->setLot($numero);
//            $produit->setPeremption($peremption);
//
//            $approv[count($approv)] = [// placement produit et quantite dans le panier
//                "produit" => $produit,
            $approv[] = $chaine;

            // On sauvegarde dans la session
            $session->set("approv", $approv);
            $res['id'] = 'ok';
            $res['designation'] = $produit->getDesignation();
            $res['prix'] = $produit->getPrixdachat();
            $res['quantite'] = $quantite;//$produit->getQuantite();

//            } else {
//                $res['id'] = 'no';
//            }
                suite:
            $response = new Response();
            $response->headers->set('content-type', 'application/json');
            $re = json_encode($res);
            $response->setContent($re);
            return $response;
        }

    }

    #[Route("/edit/", name :"edit") ]
    public function edit(Request $request, SessionInterface $session)
    {

        if ($request->isXmlHttpRequest()) {// traitement de la requete ajax
            $id = $request->get('prod');// recuperation de id produit
            $quantite = $request->get('quantite');// recuperation de la quantite commamde
            $approv = $session->get("approv", []);
            if (!empty($approv[$id])) {//verification existance produit dans le panier

                $produit = $approv[$id]['produit'];
                $produit->setQuantite($quantite);
                $approv[$id]['produit'] = $produit;

                // On sauvegarde dans la session
                $session->set("approv", $approv);

                $res['id'] = 'ok';
                $res['panier'] = $quantite;

            } else {
                $res['id'] = 'no';
            }

            //$session->set("approv", $approv);
            $res['id'] = 'ok';
            $response = new Response();
            $response->headers->set('content-type', 'application/json');
            $re = json_encode($res);
            $response->setContent($re);
            return $response;
        }

    }

    #[Route("/delete/", name :"delete") ]
    public function delete(Request $request, ProduitRepository $repository, SessionInterface $session)
    {
        // On récupère le panier actuel
        $approv = $session->get("approv", []);
        $id = $request->get('prod');
        $numero = $request->get('lot');
        foreach ($approv as $key => $item) {
            $ligne = explode("/",$item);
            if ($ligne[0] == $id) {
                unset($approv[$key]);
            }
        }
//        $id = $repository->find($request->get('prod'))->getId();
//        foreach ($approv as $key => $item) {
//            if ($item['produit']->getId() == $id) {
//                unset($approv[$id]);
//            }
//        }
        // On sauvegarde dans la session
        $session->set("approv", $approv);
        $res['id'] = 'ok';
        $res['nb'] = count($approv);
        $response = new Response();
        $response->headers->set('content-type', 'application/json');
        $re = json_encode($res);
        $response->setContent($re);
        return $response;
    }

    #[Route("/fournisseur/", name :"fournisseur") ]
    public function fournisseur(Request $request, ProduitRepository $repository, SessionInterface $session)
    {

        $fournisseurproduits = $this->entityManager->getRepository(FournisseurProduit::class)->findBy(['produit' => $request->get('prod')]);

        if(count($fournisseurproduits) > 0) {
            foreach ($fournisseurproduits as $fournisseurproduit) {

                $res[] = [
                    'test' => 'ok',
                    'id' => $fournisseurproduit->getFournisseur()->getId(),
                    'designation' => $fournisseurproduit->getFournisseur()->getDesignation(),
                ];
            }

            }else{
                $res[] = [
                    'test' => 'no',
                    'designation' => "Aucun fournisseur",
                ];
            }

        $response = new Response();
        $response->headers->set('content-type', 'application/json');
        $re = json_encode($res);
        $response->setContent($re);
        return $response;
    }

    #[Route("/deleteAll/", name :"delete_all") ]
    public function deleteAll(SessionInterface $session)
    {
        $session->remove("panier");

        $response = $this->redirectToRoute('commande_panier_panier', [], Response::HTTP_SEE_OTHER);
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

    #[Route("/valider/{id}", name :"valider") ]
    public function valider(Fournisseur $fournisseur, SessionInterface $session)
    {
        if ($this->security->isGranted('ROLE_USER')) {
            $approv = $session->get("approv", []);
            $em = $this->entityManager;
            $commande = new  commande();
            if (count($approv) >= 1) {

                $commande->setUser($this->getUser());
                // $em->persist($commande);
                $montant = 0;
                $i = 1;
                foreach ($approv as $ligne) {
                    $product = explode("/",$ligne);
                    $id = $product[0];
                    $quantite= $product[1];

                    $produit = $em->getRepository(Produit::class)->find($id);
                    
                    $montant += $produit->getPrixdachat() * $quantite;
                    // fin facture
                    $commandeproduit = new CommandeProduit($produit, $commande, $quantite, $produit->getPrixdachat(), $produit->getPrix(), $fournisseur );
                    
                    // $$i = new Stock($produit, $lot, $peremption, $quantite);
                    // $em->persist($$i);
                    // $archive = $produit->getStock();
                    // $produit->setStock($archive + $quantite);
                    // $em->persist($produit);
                    $commande->setMontant($montant);
                    $em->persist($commande);
                    $em->persist($commandeproduit);
                    // $i++;
                    $em->flush();
                }
              
                    $facture = new FactureFournisseur();
                    $facture->setMontant($montant);
                    $facture->setCommande($commande);
                    $facture->setFournisseur($fournisseur);
                    $em->persist($facture);

                $em->flush();
                $session->remove("approv");
            }
            $this->addFlash('notice', 'Commande réussie');
            $response = $this->redirectToRoute('stock_historique');
            $response->setSharedMaxAge(0);
            $response->headers->addCacheControlDirective('no-cache', true);
            $response->headers->addCacheControlDirective('no-store', true);
            $response->headers->addCacheControlDirective('must-revalidate', true);
            $response->setCache([
                'max_age' => 0,
                'private' => true,
            ]);
            return $response;
        } else {
            $response = $this->redirectToRoute('security_login');
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
    }


    #[Route("/Details/{id}", name :"show", methods : ["GET"]) ]
    public function details(Commande $commande, CommandeProduitRepository $repository): Response
    {
        if ($this->security->isGranted('ROLE_USER')) {

            $response = $this->render('approvisionnement/show.html.twig', [
                'commande' => $commande,
                'commandeproduits' => $repository->findBy(['commande' => $commande]),
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
        } else {
            $response = $this->redirectToRoute('security_login');
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
    }

    #[Route("/Details_print/{id}", name :"show_print", methods : ["GET"]) ]
    public function detailsprint(commande $commande, CommandeProduitRepository $repository): Response
    {
        if ($this->security->isGranted('ROLE_STOCK')) {

            $response = $this->render('approvisionnement/show_print.html.twig', [
                'commande' => $commande,
                'approvisionnements' => $repository->findBy(['commande' => $commande]),
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
        } else {
            $response = $this->redirectToRoute('security_login');
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
    }

}
