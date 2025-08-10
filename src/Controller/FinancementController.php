<?php

namespace App\Controller;

use App\Entity\Credit;
use App\Entity\Compte;
use App\Entity\Ecriture;
use App\Entity\Financement;
use App\Form\FinancementType;
use App\Form\FinancementBanqueType;
use App\Repository\FinancementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/{_locale}/financement") ]
class FinancementController extends AbstractController
{
       public function __construct(private Security $security, private EntityManagerInterface $entityManager)
    {
    }
    #[Route("/", name :"financement_index", methods : ["GET"]) ]
    public function index(FinancementRepository $financementRepository): Response
    {
        if ($this->security->isGranted('ROLE_ADMIN')) {
            return $this->render('financement/index.html.twig', [
                'financements' => $financementRepository->findAll(),
            ]);
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

    #[Route("/Choix_Financement", name :"financement_choix", methods : ["GET"]) ]
    public function choix(): Response
    {
        if ($this->security->isGranted('ROLE_ADMIN')) {
            return $this->render('financement/choix_financement.html.twig');
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

    #[Route("/new", name :"financement_apport", methods : ["GET","POST"]) ]
    public function apport(Request $request): Response
    {
        if ($this->security->isGranted('ROLE_ADMIN')) {
            $financement = new Financement();

            $form = $this->createForm(FinancementType::class, $financement);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
               $entityManager = $this->entityManager;

                $credit = new Credit();
                $ecriture = new Ecriture();
                $credit->setFinancement($financement);// ecriture comptable
                $credit->setMontant($financement->getMontant());

                // $financement->setCompte('1651' . str_pad($financement->getCompte(), 2, '0', STR_PAD_LEFT));
                $financement->setCompte('1651');
                $financement->setLibellecompte("Apport Exploitant");
                if ($financement->getType() == 'Espece') {
                    $credit->setCompte(571);
                    $credit->setType('Espece');


                    $ecriture->setCredit($credit);
                    $ecriture->setType('Espece');
                    $ecriture->setComptecredit(571);
                    $ecriture->setLibellecomptecredit("Caisse");
                    $ecriture->setComptedebit($financement->getCompte());
                    $ecriture->setLibellecomptedebit($financement->getLibellecompte());

                } elseif ($financement->getType() == 'Orange Money') {
                    $credit->setCompte(522);
                    $credit->setType('Orange Money');


                    $ecriture->setCredit($credit);
                    $ecriture->setType('Orange Money');
                    $ecriture->setComptecredit(522);
                    $ecriture->setLibellecomptecredit("Orange Money");
                    $ecriture->setComptedebit(1651);
                    $ecriture->setLibellecomptedebit($financement->getLibellecompte());

                }elseif ($financement->getType() == 'Wave') {
                    $credit->setCompte(523);
                    $credit->setType('Wave');


                    $ecriture->setCredit($credit);
                    $ecriture->setType('Wave');
                    $ecriture->setComptecredit(523);
                    $ecriture->setLibellecomptecredit("Wave");
                    $ecriture->setComptedebit(1651);
                    $ecriture->setLibellecomptedebit($financement->getLibellecompte());

                } else {
                    $financement->setType('Banque');
                    // $credit->setCompte($financement->getBanque()->getCompte());
                    $credit->setCompte("521");
                    $credit->setType('Banque');


                    $ecriture->setCredit($credit);
                    $ecriture->setType('Banque');
                    // $ecriture->setComptecredit($financement->getBanque()->getCompte());
                    $ecriture->setComptecredit("521");
                    // $ecriture->setLibellecomptecredit($financement->getBanque()->getNom());
                    $ecriture->setLibellecomptecredit("Banque");
                    $ecriture->setComptedebit($financement->getCompte());
                    $ecriture->setLibellecomptedebit($financement->getLibellecompte());
                }

                $compte = new Compte();
                $compte->setNumero($financement->getCompte());
                $compte->setIntitule($financement->getLibellecompte());
    
                $entityManager->persist($compte);

                $ecriture->setMontant($financement->getMontant());
                $ecriture->setLibelle($financement->getMotif());
                $ecriture->setSolde($financement->getMontant());

                $entityManager->persist($financement);
                $entityManager->persist($credit);
                $entityManager->persist($ecriture);
                $entityManager->flush();

                return $this->redirectToRoute('financement_index', [], Response::HTTP_SEE_OTHER);
            }

            return $this->render('financement/new.html.twig', [
                'financement' => $financement,
                'form' => $form->createView(),
            ]);
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

    #[Route("/Pret", name :"financement_pret", methods : ["GET","POST"]) ]
    public function pret(Request $request): Response
    {
        if ($this->security->isGranted('ROLE_ADMIN')) {
            $financement = new Financement();

            $form = $this->createForm(FinancementBanqueType::class, $financement);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->entityManager;

                $credit = new Credit();
                $credit->setFinancement($financement);// ecriture comptable
                $credit->setMontant($financement->getMontant());
                // $num = $financement->getCompte();
                // $financement->setCompte('162' . str_pad($num, 2, '0', STR_PAD_LEFT));
                $financement->setCompte('162');
                $financement->setLibellecompte("Pret Bancaire");
                // $financement->setCompteinteret('674' . str_pad($num, 2, '0', STR_PAD_LEFT));
                $financement->setApport(false);
                $financement->setType('Banque');

                // $credit->setCompte($financement->getBanque()->getCompte());
                $credit->setCompte("521");
                $credit->setType('Banque');


                $ecriture = new Ecriture();
                $ecriture->setCredit($credit);
                $ecriture->setType('Banque');
                // $ecriture->setComptecredit($financement->getBanque()->getCompte());
                $ecriture->setComptecredit("521");
                // $ecriture->setLibellecomptecredit($financement->getBanque()->getNom());
                $ecriture->setLibellecomptecredit("Banque");
                $ecriture->setComptedebit($financement->getCompte());
                $ecriture->setLibellecomptedebit($financement->getLibellecompte());


                $ecriture->setMontant($financement->getMontant());
                $ecriture->setLibelle($financement->getMotif());
                $ecriture->setSolde($financement->getMontant());

                $entityManager->persist($financement);
                $entityManager->persist($credit);
                $entityManager->persist($ecriture);
                $entityManager->flush();

                return $this->redirectToRoute('financement_index', [], Response::HTTP_SEE_OTHER);
            }

            return $this->render('financement/financement_bancaire.html.twig', [
                'financement' => $financement,
                'form' => $form->createView(),
            ]);
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

    #[Route("/{id}", name :"financement_show", methods : ["GET"]) ]
    public function show(Financement $financement): Response
    {
        if ($this->security->isGranted('ROLE_ADMIN')) {
            return $this->render('financement/show.html.twig', [
                'financement' => $financement,
            ]);
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

    #[Route("/{id}/edit", name :"financement_edit", methods : ["GET","POST"]) ]
    public function edit(Request $request, Financement $financement): Response
    {
        if ($this->security->isGranted('ROLE_ADMIN')) {
            $form = $this->createForm(FinancementType::class, $financement);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $this->entityManager->flush();

                return $this->redirectToRoute('financement_index', [], Response::HTTP_SEE_OTHER);
            }

            return $this->render('financement/edit.html.twig', [
                'financement' => $financement,
                'form' => $form->createView(),
            ]);
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

    #[Route("/{id}", name :"financement_delete", methods : ["POST"]) ]
    public function delete(Request $request, Financement $financement): Response
    {
        if ($this->security->isGranted('ROLE_ADMIN')) {
            if ($this->isCsrfTokenValid('delete' . $financement->getId(), $request->request->get('_token'))) {
                $entityManager = $this->entityManager;
                $entityManager->remove($financement);
                $entityManager->flush();
            }

            return $this->redirectToRoute('financement_index', [], Response::HTTP_SEE_OTHER);
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
}
