<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Reception;
use App\Entity\ReceptionProduit;
use App\Entity\Reste;
use App\Entity\CommandeProduit;
use App\Entity\FactureFournisseur;
use App\Entity\Fournisseur;
use App\Entity\Produit;
use App\Entity\Stock;
use App\Repository\CommandeProduitRepository;
use App\Repository\CommandeRepository;
use App\Repository\ResteRepository;
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

    #[Route("/Historique_non_Receptionnees/", name :"historique", methods : ["GET"]) ]
    public function historique(CommandeRepository $repository, FournisseurRepository $repo): Response
    {
        if ($this->security->isGranted('ROLE_USER')) {

            $response = $this->render('approvisionnement/historique.html.twig', [
                'approvisionnements' => $repository->findBy(['livrer' => false]),
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

    #[Route("/Historique_Receptionnees/", name :"historique_receptionnee", methods : ["GET"]) ]
    public function nonrecptionnee(CommandeRepository $repository, FournisseurRepository $repo): Response
    {
        if ($this->security->isGranted('ROLE_USER')) {

            $response = $this->render('approvisionnement/historique_non.html.twig', [
                'approvisionnements' => $repository->findBy(['livrer' => true]),
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

    #[Route("/Reste/", name :"reste", methods : ["GET"]) ]
    public function reste(ResteRepository $repository, FournisseurRepository $repo): Response
    {
        if ($this->security->isGranted('ROLE_USER')) {

            $response = $this->render('approvisionnement/reste.html.twig', [
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

    #[Route("/valider/{id}", name :"valider_credit") ]
    public function validercredit(Fournisseur $fournisseur, SessionInterface $session)
    {
        if ($this->security->isGranted('ROLE_USER')) {
            $approv = $session->get("approv", []);
            $em = $this->entityManager;
            $commande = new  commande();
            $commande->setFournisseur($fournisseur);
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
                
                    // $facture = new FactureFournisseur();
                    // $facture->setMontant($montant);
                    // $facture->setCommande($commande);
                    // $facture->setFournisseur($fournisseur);
                    // $em->persist($facture);

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

    #[Route("/validerPayer/{id}", name :"valider_payer") ]
    public function validerpayer(Fournisseur $fournisseur, SessionInterface $session)
    {
        if ($this->security->isGranted('ROLE_USER')) {
            $approv = $session->get("approv", []);
            $em = $this->entityManager;
            $commande = new  commande();
            $commande->setFournisseur($fournisseur);
            $commande->setPayer(true);//commande payee
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
              
                   //ecriture comptable de paiement

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

    #[Route("/Details_Reception/{id}", name :"detail_reception", methods : ["GET"]) ]
    public function detailsreception(Commande $commande, CommandeProduitRepository $repository): Response
    {
        if ($this->security->isGranted('ROLE_USER')) {

            $response = $this->render('approvisionnement/detail_reception.html.twig', [
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

    #[Route("/Details_Reste/{id}", name :"details_reste", methods : ["GET"]) ]
    public function detailsreste(Commande $commande, ResteRepository $repository): Response
    {
        if ($this->security->isGranted('ROLE_USER')) {

            $response = $this->render('approvisionnement/detail_reste.html.twig', [
                'commande' => $commande,
                'restes' => $repository->findBy(['commande' => $commande->getid()]),
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

     #[Route("/Reception_Commande/{id}", name :"reception", methods : ["GET"]) ]
    public function reception(Commande $commande, SessionInterface $session, CommandeProduitRepository $CommandeProduitRepository, ProduitRepository $produitRepository): Response
    {

        if ($this->security->isGranted('ROLE_USER')) {
            $produits = [];
            $commandeproduits = $CommandeProduitRepository->findBy(['commande' => $commande->getId()]);
            foreach($commandeproduits as $commandeproduit){
                $produits[] = [
                    'id' => $commandeproduit->getProduit()->getId(),
                    'designation' => $commandeproduit->getProduit()->getDesignation(),
                    'quantite' => $commandeproduit->getQuantite(),
                ];

            }

            $approv = $session->get("reception", []);
            $dataPanier = [];

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
                'lot' => $ligne[2],
                'peremption' => $ligne[3],
                'designation' => $produit->getDesignation(),
                'recu' => $ligne[1],
                'commande' => $ligne[4],
                    ];
            }

            $response = $this->render('approvisionnement/reception.html.twig', [
                'produits' => $produits,
                'commande' => $commande,
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


     #[Route("/Reception_Reste/{id}", name :"reception_reste", methods : ["GET"]) ]
    public function reception_reste(Commande $commande, SessionInterface $session, ResteRepository $resteRepository, ProduitRepository $produitRepository): Response
    {

        if ($this->security->isGranted('ROLE_USER')) {
            $produits = [];
            $restes = $resteRepository->findBy(['commande' => $commande->getId()]);
            foreach($restes as $reste){
                $produits[] = [
                    'id' => $reste->getProduit()->getId(),
                    'designation' => $reste->getProduit()->getDesignation(),
                    'quantite' => $reste->getQuantite() - $reste->getQuantitelivre(),
                ];

            }

            $approv = $session->get("reception", []);
            $dataPanier = [];

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
                'lot' => $ligne[2],
                'peremption' => $ligne[3],
                'designation' => $produit->getDesignation(),
                'recu' => $ligne[1],
                    ];
            }

            $response = $this->render('approvisionnement/reception_reste.html.twig', [
                'produits' => $produits,
                'commande' => $commande,
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

     #[Route("/reception_add/", name :"reception_add") ]
    public function receptionadd(Request $request, ProduitRepository $produitRepository, FournisseurRepository $fournisseurRepository, SessionInterface $session)
    {
        // On récupère le panier actuel
        $approv = $session->get("reception", []);

//  $id = $request->get('produit');// recuperation de id produit
//         $chaine = $request->get('chaine');// recuperation de id produit
//         $livraison = $session->get("traitement", []);
//         $livraison[$id] = $chaine;

        if ($request->isXmlHttpRequest()) {// traitement de la requete ajax
            $id = $request->get('prod');// recuperation de id produit
            $numero = $request->get('lot');// recuperation de id produit
            $peremption = $request->get('perem');// recuperation de id produit
            $quantite = $request->get('quantite');// recuperation de la quantite commamde
            $commande = $request->get('commande');// recuperation de la quantite commamde
            foreach ($approv as $key => $item) {
                $ligne = explode("/",$item);
                if ($ligne[0] == $id && $ligne[2] == $numero) {
                    $res['id'] = 'Un produit avec les même reference a été ajouté';
                    goto suite;
                }
            }
            $produit = $produitRepository->find($id); // recuperation de id produit dans la db

            $chaine = $id."/".$quantite."/".$numero."/".$peremption."/".$commande;

            $approv[] = $chaine;

            // On sauvegarde dans la session
            $session->set("reception", $approv);
            $res['id'] = 'ok';
            $res['ref'] = $produit->getReference();
            $res['designation'] = $produit->getDesignation();
            $res['lot'] = $numero;
            $res['peremption'] = $peremption;
            $res['recu'] = $quantite;//$produit->getQuantite();
            $res['commande'] = $commande;//$produit->getQuantite();

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

       #[Route("/reste_add/", name :"reste_add") ]
    public function resteadd(Request $request, ProduitRepository $produitRepository, SessionInterface $session)
    {
        // On récupère le panier actuel
        $approv = $session->get("reception", []);

//  $id = $request->get('produit');// recuperation de id produit
//         $chaine = $request->get('chaine');// recuperation de id produit
//         $livraison = $session->get("traitement", []);
//         $livraison[$id] = $chaine;

        if ($request->isXmlHttpRequest()) {// traitement de la requete ajax
            $id = $request->get('prod');// recuperation de id produit
            $numero = $request->get('lot');// recuperation de id produit
            $peremption = $request->get('perem');// recuperation de id produit
            $quantite = $request->get('quantite');// recuperation de la quantite commamde
            foreach ($approv as $key => $item) {
                $ligne = explode("/",$item);
                if ($ligne[0] == $id && $ligne[2] == $numero) {
                    $res['id'] = 'Un produit avec les même reference a été ajouté';
                    goto suite;
                }
            }
            $produit = $produitRepository->find($id); // recuperation de id produit dans la db

            $chaine = $id."/".$quantite."/".$numero."/".$peremption;

            $approv[$id] = $chaine;

            // On sauvegarde dans la session
            $session->set("reception", $approv);
            $res['id'] = 'ok';
            $res['ref'] = $produit->getReference();
            $res['designation'] = $produit->getDesignation();
            $res['lot'] = $numero;
            $res['peremption'] = $peremption;
            $res['recu'] = $quantite;//$produit->getQuantite();

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

     #[Route("/reception_delete/", name :"reception_delete") ]
    public function reception_delete(Request $request, ProduitRepository $repository, SessionInterface $session)
    {
        // On récupère le panier actuel
        $approv = $session->get("reception", []);
        $id = $request->get('prod');
        $numero = $request->get('lot');
        foreach ($approv as $key => $item) {
            $ligne = explode("/",$item);
            if ($ligne[0] == $id && $ligne[2] == $numero) {
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
        $session->set("reception", $approv);
        $res['id'] = 'ok';
        $res['nb'] = count($approv);
        $response = new Response();
        $response->headers->set('content-type', 'application/json');
        $re = json_encode($res);
        $response->setContent($re);
        return $response;
    }

      #[Route("/valider_reception/{commande}/{fournisseur}", name :"reception_valider") ]
    public function valider(Commande $commande, Fournisseur $fournisseur, CommandeProduitRepository $CommandeProduitRepository, SessionInterface $session)
    {
        if ($this->security->isGranted('ROLE_USER')) {
            $approv = $session->get("reception", []);

            if (count($approv) >= 1) {
                 $produits = [];
                $commandeproduits = $CommandeProduitRepository->findBy(['commande' => $commande->getId()]);
                foreach($commandeproduits as $commandeproduit){
                    $produits[] = [
                        'id' => $commandeproduit->getProduit()->getId(),
                        'quantite' => $commandeproduit->getQuantite(),
                    ];

                }
                $em = $this->entityManager;
                $reception = new  Reception();
                $reception->setCommande($commande);
                $reception->setFournisseur($fournisseur);
           
            

                $reception->setUser($this->getUser());
                $em->persist($reception);
                $i = 1;
                foreach ($produits as $prod) {// parcour des produit commamdes
                    $quantitamp = 0;
                    foreach($approv as $chaine){ // parcour des produits recus
                        // $ligne = $approv[$prod['id']];
                        $product = explode("/",$chaine);
                        $id = $product[0];
                        $quantite= $product[1];
                        $lot= $product[2];
                        $peremption= $product[3];
                        $quantitecommande= $product[4];
                        if($id == $prod['id']){

                            $produit = $em->getRepository(Produit::class)->find($id);
                            // fin facture
                            $receptionProduit = new ReceptionProduit($produit, $reception, $quantite,$commande, $fournisseur);
                            $receptionProduit->setLot($lot);
                            $receptionProduit->setUser($this->getUser());
                            $receptionProduit->setPrixdachat($produit->getPrixdachat());
                            $receptionProduit->setPeremption(new \DateTime($peremption));
                            $$i = new Stock($produit, $lot, $peremption, $quantite);
                            $em->persist($$i);
                            $archive = $produit->getStock();
                            $produit->setStock($archive + $quantite);
                            $em->persist($produit);
                            $em->persist($receptionProduit);
                            $quantitamp += $quantite;

                        
                            $i++;                                                                                                               
                        }
                    }
                    if($quantitamp < $prod['quantite']){// verification de la quantite commandee et celle recue
                         $reste = new Reste($reception, $commande, $produit, $quantitecommande, $quantitamp, $fournisseur);
                        $reste->setPrixdachat($produit->getPrixdachat());
                        if(!$commande->isPayer()) $reste->setCredit(true) ;
                        $em->persist($reste);
                        $commande->setReste(true);
                    }
                }

                if(!$commande->isPayer()){
                    $facture = new FactureFournisseur();
                    $facture->setMontant($commande->getMontant());
                    $facture->setCommande($commande);
                    $facture->setFournisseur($fournisseur);
                    $em->persist($facture);
                }  
                
                $commande->setLivrer(true);
                $em->persist($commande);
                $em->flush();
                $session->remove("reception");
            }
            $this->addFlash('notice', 'Recpetion réussie');
            $response = $this->redirectToRoute('stock_index');
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

      #[Route("/valider_reste/{commande}/{fournisseur}", name :"reste_valider") ]
    public function valider_reste(Commande $commande, Fournisseur $fournisseur, ResteRepository $resteRepository, SessionInterface $session)
    {
        if ($this->security->isGranted('ROLE_USER')) {
            $approv = $session->get("reception", []);

            if (count($approv) >= 1) {
                 $produits = [];
                $em = $this->entityManager;
                $restes = $resteRepository->findBy(['commande' => $commande->getId()]);
                foreach($restes as $reste){
                     $reception = $em->getRepositoty()->findBy(['commande' => $commande, 'fournisseur' => $fournisseur]);
            
                

                    $reception->setUser($this->getUser());
                    $em->persist($reception);
                    $i = 1;
                    $id = $reste->getProduit()->getId();
                   
                    if(isset($approv[$id])){
                        $ligne = $approv[$id];
                        $product = explode("/",$ligne);
                        $id = $product[0];
                        $quantite= $product[1];
                        $lot= $product[2];
                        $peremption= $product[3];

                        $produit = $em->getRepository(Produit::class)->find($id);
                        // fin facture
                        $receptionProduit = new ReceptionProduit($produit, $reception, $quantite, $commande, $fournisseur);
                        $receptionProduit->setLot($lot);
                        $receptionProduit->setUser($this->getUser());
                        $receptionProduit->setPrixdachat($produit->getPrixdachat());
                        $receptionProduit->setPeremption(new \DateTime($peremption));
                        $$i = new Stock($produit, $lot, $peremption, $quantite);
                        $em->persist($$i);
                        $archive = $produit->getStock();
                        $produit->setStock($archive + $quantite);
                        $em->persist($produit);
                        $em->persist($receptionProduit);

                       
                            $reste = $resteRepository->findOneBy(['commande' => $commande->getId(), 'produit' => $produit->getId()]);
                            $em->remove($reste);

                        $i++;
                    }else{
                        $this->add('notice','renseignez correctement les produits');
                    }

                }
                $em->flush();
                $session->remove("reception");
            }
            $this->addFlash('notice', 'Recpetion réussie');
            $response = $this->redirectToRoute('stock_index');
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
