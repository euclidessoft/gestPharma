<?php

namespace App\Controller;

use App\Entity\Achat;
use App\Entity\Debit;
use App\Entity\Ecriture;
use App\Entity\Facture;
use App\Entity\FactureFournisseur;
use App\Entity\Mutuel;
use App\Complement\Solde;
use App\Entity\Versement;
use App\Repository\MutuelRepository;
use App\Repository\VenteRepository;
use App\Form\FactureForm;
use App\Form\VersementForm;
use App\Form\AchatType;
use App\Repository\FactureRepository;
use App\Repository\FactureFournisseurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\SecurityBundle\Security;

#[Route('/facture')]
final class FactureController extends AbstractController
{  
    public function __construct(private Security $security, private EntityManagerInterface $entityManager)
    {
    }

    #[Route("/Emettre/{id}", name:"facture-emettre", methods:["GET"])]
    public function vente(Mutuel $mutuel, VenteRepository $repository): Response
    {
        if ($this->security->isGranted('ROLE_USER')) {
            $ventes =  $repository->factureMoisPrecedent($mutuel->getId());
            if(!empty($ventes)){
                $facture = new Facture();
                $montant = 0;
                $tva = 0;
                foreach($ventes as $vente){
                    $facture->addVente($vente);
                    $montant += $vente->getCouverture();
                    $tva += $vente->getTva();

                }
                $facture->setMontant($montant);
                $facture->setTva($tva);
                $facture->setMutuel($mutuel);
                $facture->setMois(date('m'));
                $this->entityManager->persist($facture);
                $this->entityManager->flush();
            }
       
        $response = $this->redirectToRoute('mutuel_show', [
            'id' => $mutuel->getId(),
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
           $response = $this->redirectToRoute('security_logout');
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
    
    #[Route("/Details/{mutuel}/{facture}", name:"facture_details", methods:["GET"])]
    public function detail(Mutuel $mutuel, Facture $facture): Response
    {
        if ($this->security->isGranted('ROLE_USER')) {
            
        $response = $this->render('facture/details.html.twig', [
            'mutuel' => $mutuel,
            'facture' => $facture,
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
           $response = $this->redirectToRoute('security_logout');
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
    
    #[Route("/Paiement/{mutuel}/{facture}", name:"facture_paiement", methods:["GET", "POST"])]
    public function paiement(Request $request, Mutuel $mutuel, Facture $facture): Response
    {
        if ($this->security->isGranted('ROLE_USER')) {
             $versement = new Versement();
            // $credit = new Credit();
            // $ecriture = new Ecriture();
            $form = $this->createForm(VersementForm::class, $versement);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $entityManager = $this->entityManager;
                if ($versement->getMontant() <= ($facture->getMontant() - $facture->getVersement())) {
                    $facture->setVersement($facture->getVersement() + $versement->getMontant());// MAJ versement
                    if ($facture->getVersement() == $facture->getMontant()) {

                        $facture->setPayer(true);
                        // $credit->setTva($facture->getTva());

                    }
                    $versement->setUser($this->getUser());
                    $versement->setfacture($facture);
                    // if($versement->getType() == 'Espece'){

                    //     $credit->setType('Espece');
                    //     $credit->setCompte(571);

                    //     $ecriture->setType('Espece');
                    //     $ecriture->setComptecredit(571);
                    //     $ecriture->setLibellecomptecredit("Caisse");
                    // }else{
                    //     $credit->setType('Banque');
                    //     $credit->setCompte($versement->getBanque()->getCompte());

                    //     $ecriture->setType('Banque');
                    //     $ecriture->setComptecredit($versement->getBanque()->getCompte());
                    //     $ecriture->setLibelleComptecredit($versement->getBanque()->getNom());


                    // }
                    // $credit->setVersement($versement);// ecriture comptable
                    // $credit->setMontant($versement->getMontant());

                    // $ecriture->setSolde($versement->getMontant());
                    // $ecriture->setCredit($credit);
                    // $ecriture->setMontant($versement->getMontant());
                    // $ecriture->setLibelle('Vente de médicaments');
                    // $ecriture->setComptedebit($versement->getfacture()->getUser()->getCompte());
                    // $ecriture->setLibellecomptedebit("Compte Client");

                    $entityManager->persist($versement);
                    // $entityManager->persist($credit);
                    // $entityManager->persist($ecriture);
                    $entityManager->flush();
                    $this->addFlash('notice', 'Réglement effectué avec succés');

                    $response = $this->redirectToRoute('facture_paiement', ['mutuel' => $mutuel->getId(),'facture' => $facture->getId()], Response::HTTP_SEE_OTHER);
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
                    $this->addFlash('danger', 'Vérifier le montant saisi');
                    // $response = $this->redirectToRoute('facture_paiement', [,'facture' => $facture->getId()], Response::HTTP_SEE_OTHER);
                    // $response->setSharedMaxAge(0);
                    // $response->headers->addCacheControlDirective('no-cache', true);
                    // $response->headers->addCacheControlDirective('no-store', true);
                    // $response->headers->addCacheControlDirective('must-revalidate', true);
                    // $response->setCache([
                    //     'max_age' => 0,
                    //     'private' => true,
                    // ]);
                    // return $response;
                }

            }
            
        $response = $this->render('facture/paiement.html.twig', [
            'mutuel' => $mutuel,
            'facture' => $facture,
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
    } else {
           $response = $this->redirectToRoute('security_logout');
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


    #[Route(name: 'app_facture_index', methods: ['GET'])]
    public function index(FactureRepository $factureRepository): Response
    {
        return $this->render('facture/index.html.twig', [
            'factures' => $factureRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_facture_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $facture = new Facture();
        $form = $this->createForm(FactureForm::class, $facture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($facture);
            $entityManager->flush();

            return $this->redirectToRoute('app_facture_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('facture/new.html.twig', [
            'facture' => $facture,
            'form' => $form,
        ]);
    }


    #[Route("/Commande_Facture_list", name :"facture_list", methods : ["GET"]) ]
    public function listfacture(FactureFournisseurRepository $repository): Response
    {
         if ($this->security->isGranted('ROLE_USER')) {
            $response = $this->render('facture/facture_list.html.twig', [
                'facturefournisseurs' => $repository->findBy(['payer' => false]),
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

    #[Route('/{id}', name: 'app_facture_show', methods: ['GET'])]
    public function show(Facture $facture): Response
    {
        return $this->render('facture/show.html.twig', [
            'facture' => $facture,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_facture_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Facture $facture, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FactureForm::class, $facture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_facture_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('facture/edit.html.twig', [
            'facture' => $facture,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_facture_delete', methods: ['POST'])]
    public function delete(Request $request, Facture $facture, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$facture->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($facture);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_facture_index', [], Response::HTTP_SEE_OTHER);
    }



    #[Route("/PayeCommande/{facture}", name :"payer_commande", methods : ["GET","POST"]) ]
    public function payecommande(Request $request,FactureFournisseur $facture, Solde $solde): Response
    {
        if ($this->security->isGranted('ROLE_USER')) {
            $achat = new Achat();
            $achat->setMontant($facture->getMontant());
            $achat->setFournisseur($facture->getFournisseur());
            $debit = new Debit();
            $ecriture = new Ecriture();
            $form = $this->createForm(AchatType::class, $achat);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                
                    $entityManager = $this->entityManager;
                    $achat->setUser($this->getUser());
                    $montant = 0;
                    if($achat->getType() == 'Espece'){
                        $montant = $solde->montantcaisse($entityManager, 571);
                        $achat->setCompte($achat->getFournisseur()->getCompte());

                        $debit->setType('Espece');
                        $debit->setCompte(571);

                        $ecriture->setType('Espece');
                        $ecriture->setComptecredit($achat->getFournisseur()->getCompte());
                        $ecriture->setLibellecomptecredit($achat->getFournisseur()->getDesignation());
                        $ecriture->setComptedebit(571);
                        $ecriture->setLibellecomptedebit("Caisse");
                    }
                    elseif($achat->getType() == 'Orange Money'){
                        $montant = $solde->montantcaisse($entityManager, 571);
                        $achat->setCompte($achat->getFournisseur()->getCompte());

                        $debit->setType('Orange Money');
                        $debit->setCompte('521');

                        $ecriture->setType('Orange Money');
                        $ecriture->setComptecredit($achat->getFournisseur()->getCompte());
                        $ecriture->setLibellecomptecredit($achat->getFournisseur()->getDesignation());
                        $ecriture->setComptedebit('521');
                        $ecriture->setLibellecomptedebit("Orange Money");
                    }elseif($achat->getType() == 'Wave'){
                        $montant = $solde->montantcaisse($entityManager, 571);
                        $achat->setCompte($achat->getFournisseur()->getCompte());

                        $debit->setType('Wave');
                        $debit->setCompte('522');

                        $ecriture->setType('Wave');
                        $ecriture->setComptecredit($achat->getFournisseur()->getCompte());
                        $ecriture->setLibellecomptecredit($achat->getFournisseur()->getDesignation());
                        $ecriture->setComptedebit('522');
                        $ecriture->setLibellecomptedebit("Wave");
                    }
                    else{
                        $montant = $solde->montantbanque($entityManager, $achat->getBanque()->getCompte());//sole compte
                        $achat->setType('Banque');
                        $achat->setCompte($achat->getFournisseur()->getCompte());

                        $debit->setType('Banque');
                        $debit->setMontant($achat->getMontant());
                        $debit->setCompte($achat->getBanque()->getCompte());

                        $ecriture->setType('Banque');
                        $ecriture->setComptecredit($achat->getFournisseur()->getCompte());
                        $ecriture->setLibellecomptecredit("Fournisseur");
                        $ecriture->setComptedebit($achat->getBanque()->getCompte());
                        $ecriture->setLibelleComptedebit($achat->getBanque()->getNom());
                    }
                    if($achat->getMontant() <= $montant) {
                        $debit->setAchat($achat);
                        $debit->setMontant($achat->getMontant());
                        $facture->setPayer(true);

                        $ecriture->setDebit($debit);
                        $ecriture->setSolde(-$achat->getMontant());
                        $ecriture->setMontant($achat->getMontant());
                        $ecriture->setLibelle('Achat chez '. $achat->getFournisseur()->getDesignation());
                        $entityManager->persist($achat);
                        $entityManager->persist($debit);
                        $entityManager->persist($ecriture);
                        $entityManager->persist($facture);
                        $entityManager->flush();
                        $response = $this->redirectToRoute('achat_index', [], Response::HTTP_SEE_OTHER);
                        $response->setSharedMaxAge(0);
                        $response->headers->addCacheControlDirective('no-cache', true);
                        $response->headers->addCacheControlDirective('no-store', true);
                        $response->headers->addCacheControlDirective('must-revalidate', true);
                        $response->setCache([
                            'max_age' => 0,
                            'private' => true,
                        ]);
                        return $response;
                    }else{
                        $this->addFlash('notice', 'Montant non disponible');
                    }   
                }
        
            $response = $this->render('facture/new.html.twig', [
                'achat' => $achat,
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
