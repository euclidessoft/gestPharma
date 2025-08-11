<?php

namespace App\Controller;

use App\Entity\Credit;
use App\Entity\Debit;
use App\Entity\Ecriture;
use App\Entity\Transfert;
use App\Form\TransfertType;
use App\Repository\TransfertRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Complement\Solde as Solde;

#[Route("/{_locale}/transfert") ]
class TransfertController extends AbstractController
{
       public function __construct(private Security $security, private EntityManagerInterface $entityManager)
    {
    }

#[Route("/", name :"transfert_index", methods : ["GET"]) ]
    public function index(TransfertRepository $transfertRepository): Response
    {
        return $this->render('transfert/index.html.twig', [
            'transferts' => $transfertRepository->findAll(),
        ]);
    }

     #[Route("/New", name :"transfert_new", methods : ["GET","POST"]) ]
    public function new(Request $request, Solde $solde): Response
    {
         if ($this->security->isGranted('ROLE_ADMIN')) {
          
             if ($request->isMethod('POST')) {

                 $entityManager = $this->entityManager;
                 $source = $request->request->get('source');
                 $destination = $request->request->get('destination');
                 $montant = $request->request->get('montant');
                
                $fond = $solde->montant($entityManager, $this->Compte($source));
                if($montant <= $fond){

                    $transfert = new Transfert();
                    $transfert->setMontant($montant);
                    $transfert->setSource($source);
                    $transfert->setDestination($destination);
                    $transfert->setUser($this->getUser());
                    $debit = new Debit();
                    $debit->setTransfert($transfert);
                    $debit->setType($source);
                    $debit->setCompte($this->Compte($source));
                    $debit->setMontant($transfert->getMontant());
                    $debitecriture = new Ecriture();
                    $debitecriture->setDebit($debit);
                    $debitecriture->setType($source);
                    $debitecriture->setLibelle("Transfert ".$source." → ".$destination);
                    $debitecriture->setSolde(-$transfert->getMontant());
                    $debitecriture->setMontant($transfert->getMontant());
                    $debitecriture->setComptedebit($this->Compte($source));
                    $debitecriture->setLibellecomptedebit($source);
                    $debitecriture->setComptecredit($this->Compte($destination));
                    $debitecriture->setLibellecomptecredit($destination);


                    $credit = new Credit();
                    $credit->setTransfert($transfert);
                    $credit->setType($destination);
                    $credit->setCompte($this->Compte($destination));
                    $credit->setMontant($transfert->getMontant());

                    $creditecriture = new Ecriture();
                    $creditecriture->setCredit($credit);
                    $creditecriture->setType($destination);
                    $creditecriture->setLibelle("Transfert ".$source." → ".$destination);
                    $creditecriture->setSolde($transfert->getMontant());
                    $creditecriture->setMontant($transfert->getMontant());
                    $creditecriture->setComptedebit($this->Compte($source));
                    $creditecriture->setLibellecomptedebit($source);
                    $creditecriture->setComptecredit($this->Compte($destination));
                    $creditecriture->setLibellecomptecredit($destination);


                    $entityManager->persist($transfert);
                    $entityManager->persist($debit);
                    $entityManager->persist($credit);
                    $entityManager->persist($debitecriture);
                    $entityManager->persist($creditecriture);
                    $entityManager->flush();

                    $this->addFlash('notice', 'transfert reussi');
                    return $this->redirectToRoute('transfert_index', [], Response::HTTP_SEE_OTHER);
                }else{
                    $this->addFlash('notice', 'Montant non disponible dans le compte source');
                }
            }

            $response = $this->render('transfert/new.html.twig');
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

    #[Route("/caisse", name :"transfert_caisse", methods : ["GET","POST"]) ]
    public function caisse(Request $request, Solde $solde): Response
    {
        $transfert = new Transfert();
        $form = $this->createForm(TransfertType::class, $transfert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->entityManager;
            $montant = $solde->montantcaisse($entityManager,571);
            if($transfert->getMontant() <= $montant){
            $transfert->setSource('Caisse');
            $transfert->setDestination('Banque');
            $transfert->setDestination('Banque');
            $transfert->setUser($this->getUser());
            $debit = new Debit();
            $debit->setTransfert($transfert);
            $debit->setType('Espece');
            $debit->setCompte(571);
            $debit->setMontant($transfert->getMontant());
            $debitecriture = new Ecriture();
            $debitecriture->setDebit($debit);
            $debitecriture->setType('Espece');
            $debitecriture->setLibelle('Transfert caisse → banque');
            $debitecriture->setSolde(-$transfert->getMontant());
            $debitecriture->setMontant($transfert->getMontant());
            $debitecriture->setComptedebit('571');
            $debitecriture->setLibellecomptedebit("Caisse");
            $debitecriture->setComptecredit($transfert->getBanque()->getCompte());
            $debitecriture->setLibellecomptecredit($transfert->getBanque()->getNom());


            $credit = new Credit();
            $credit->setTransfert($transfert);
            $credit->setType('Banque');
            $credit->setCompte($transfert->getBanque()->getCompte());
            $credit->setMontant($transfert->getMontant());

            $creditecriture = new Ecriture();
            $creditecriture->setCredit($credit);
            $creditecriture->setType('Banque');
            $creditecriture->setLibelle('Transfert caisse → banque');
            $creditecriture->setSolde($transfert->getMontant());
            $creditecriture->setMontant($transfert->getMontant());
            $creditecriture->setComptedebit('571');
            $creditecriture->setLibellecomptedebit('Caisse');
            $creditecriture->setComptecredit($transfert->getBanque()->getCompte());
            $creditecriture->setLibellecomptecredit($transfert->getBanque()->getNom());


            $entityManager->persist($transfert);
            $entityManager->persist($debit);
            $entityManager->persist($credit);
            $entityManager->persist($debitecriture);
            $entityManager->persist($creditecriture);
            $entityManager->flush();

            return $this->redirectToRoute('transfert_index', [], Response::HTTP_SEE_OTHER);
            }
            else{
                $this->addFlash('notice', 'Montant disponible '.$montant);
            }
        }
        return $this->render('transfert/caisse.html.twig', [
            'transfert' => $transfert,
            'form' => $form->createView(),
        ]);
    }

    #[Route("/banque", name :"transfert_banque", methods : ["GET","POST"]) ]
    public function banque(Request $request, Solde $solde): Response
    {
        $transfert = new Transfert();
        $form = $this->createForm(TransfertType::class, $transfert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->entityManager;
            $montant = $solde->montantbanque($entityManager, $transfert->getBanque()->getCompte());
            if($transfert->getMontant() <= $montant){
            $transfert->setSource('Banque');
            $transfert->setDestination('Caisse');
            $transfert->setUser($this->getUser());
            $debit = new Debit();
            $debit->setTransfert($transfert);
            $debit->setType('Banque');
            $debit->setCompte($transfert->getBanque()->getCompte());
            $debit->setMontant($transfert->getMontant());
            $debitecriture = new Ecriture();
            $debitecriture->setDebit($debit);
            $debitecriture->setType('Banque');
            $debitecriture->setLibelle('Transfert banque → caisse');
            $debitecriture->setSolde(-$transfert->getMontant());
            $debitecriture->setMontant($transfert->getMontant());
            $debitecriture->setComptedebit($transfert->getBanque()->getCompte());
            $debitecriture->setLibellecomptedebit($transfert->getBanque()->getNom());
            $debitecriture->setComptecredit('571');
            $debitecriture->setLibellecomptecredit('Caisse');


            $credit = new Credit();
            $credit->setTransfert($transfert);
            $credit->setType('Espece');
            $credit->setCompte(571);
            $credit->setMontant($transfert->getMontant());
            $creditecriture = new Ecriture();
            $creditecriture->setCredit($credit);
            $creditecriture->setType('Espece');
            $creditecriture->setLibelle('Transfert banque → caisse');
            $creditecriture->setSolde($transfert->getMontant());
            $creditecriture->setMontant($transfert->getMontant());
            $creditecriture->setComptedebit($transfert->getBanque()->getCompte());
            $creditecriture->setLibellecomptedebit($transfert->getBanque()->getNom());
            $creditecriture->setComptecredit('571');
            $creditecriture->setLibellecomptecredit('Caisse');


            $entityManager->persist($transfert);
            $entityManager->persist($debit);
            $entityManager->persist($credit);
            $entityManager->persist($debitecriture);
            $entityManager->persist($creditecriture);
            $entityManager->flush();

            return $this->redirectToRoute('transfert_index', [], Response::HTTP_SEE_OTHER);
            }
            else{
                $this->addFlash('notice', 'Montant disponible '.$montant);
            }
        }

        return $this->render('transfert/banque.html.twig', [
            'transfert' => $transfert,
            'form' => $form->createView(),
        ]);
    }

    #[Route("/{id}", name :"transfert_show", methods : ["GET"]) ]
    public function show(Transfert $transfert): Response
    {
        return $this->render('transfert/show.html.twig', [
            'transfert' => $transfert,
        ]);
    }

    #[Route("/{id}/edit", name :"transfert_edit", methods : ["GET","POST"]) ]
    public function edit(Request $request, Transfert $transfert): Response
    {
        $form = $this->createForm(TransfertType::class, $transfert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            return $this->redirectToRoute('transfert_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('transfert/edit.html.twig', [
            'transfert' => $transfert,
            'form' => $form->createView(),
        ]);
    }

    #[Route("/{id}", name :"transfert_delete", methods : ["POST"]) ]
    public function delete(Request $request, Transfert $transfert): Response
    {
        if ($this->isCsrfTokenValid('delete'.$transfert->getId(), $request->request->get('_token'))) {
            $entityManager = $this->entityManager;
            $entityManager->remove($transfert);
            $entityManager->flush();
        }

        return $this->redirectToRoute('transfert_index', [], Response::HTTP_SEE_OTHER);
    }

}
