<?php

namespace App\Controller;

use App\Complement\Solde;
use App\Entity\Banque;
use App\Entity\Commande;
use App\Entity\Approvisionnement;
use App\Entity\Facture;
use App\Entity\Stock;
use App\Entity\Accompte;
use App\Entity\Avoir;
use App\Entity\Categorie;
use App\Entity\Debit;
use App\Entity\Depense;
use App\Entity\Ecriture;
use App\Entity\Financement;
use App\Entity\Paie;
use App\Entity\PaieSalaire;
use App\Entity\LivrerReste;
use App\Repository\EcritureRepository;
use App\Repository\PaieRepository;
use App\Repository\AccompteRepository;
use App\Repository\CommandeRepository;
use App\Repository\CommandeProduitRepository;
use App\Repository\ApprovisionnementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\SecurityBundle\Security;

#[Route("/{_locale}/finance", name :"finance_") ]
class FinanceController extends AbstractController
{ 
      public function __construct(private Security $security, private EntityManagerInterface $entityManager)
    {
    }

    #[Route("/", name :"index") ]
    public function index(EcritureRepository $repository): Response
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $ecritures = $repository->findAll();
            $caisse = 0;
            $banque = 0;
            $debitbanque = 0;
            $debitcaisse = 0;
            foreach ($ecritures as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $credit->getType() == 'Espece' ?
                        $caisse = $caisse + $credit->getMontant() :
                        $banque = $banque + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debit->getType() == 'Espece' ?
                        $debitcaisse = $debitcaisse + $debit->getMontant() :
                        $debitbanque = $debitbanque + $debit->getMontant();

                }

            }

            return $this->render('finance/index.html.twig', [
                'caisse' => $caisse - $debitcaisse,
                'banque' => $banque - $debitbanque,
                'ecritures' => $ecritures,
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

    #[Route("/JournalBanque/{banque}", name :"journal_banque") ]
    public function journalbanque(EcritureRepository $repository, Banque $banque, Solde $solde): Response
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $ecritures = $repository->findAll();

            $caisse = 0;
            $bank = 0;
            $debitbanque = 0;
            $debitcaisse = 0;
            $ecrit = [];
            foreach ($ecritures as $ecriture) {
                if ($banque->getCompte() == $ecriture->getComptecredit() || $banque->getCompte() == $ecriture->getComptedebit()) {
                    $credit = null;
                    $debit = null;
                    if ($ecriture->getCredit() != null) {
                        $credit = $ecriture->getCredit();

                        $bank = $bank + $credit->getMontant();
                    } else {

                        $debit = $ecriture->getDebit();

                        $debitbanque = $debitbanque + $debit->getMontant();

                    }
                    $ecrit[] = $ecriture;
                }

            }

            return $this->render('banque/journal_banque.html.twig', [
                'soldecaisse' => $caisse - $debitcaisse,
                'soldebanque' => $bank - $debitbanque,
                'banque' => $banque,
                'ecritures' => $ecrit,
                'solde' => $solde->montantbanque($this->entityManager, $banque->getCompte()),
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

    #[Route("/JournalCompte/{compte}", name :"journal_compte") ]
    public function journalCompte(EcritureRepository $repository, $compte): Response
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $ecritures = $repository->findAll();

            $caisse = 0;
            $bank = 0;
            $debitbanque = 0;
            $debitcaisse = 0;
            $ecrit = [];
            foreach ($ecritures as $ecriture) {
                if ($compte == $ecriture->getComptecredit() || $compte == $ecriture->getComptedebit()) {
                    $credit = null;
                    $debit = null;
                    if ($ecriture->getCredit() != null) {
                        $credit = $ecriture->getCredit();

                        $bank = $bank + $credit->getMontant();
                    } else {

                        $debit = $ecriture->getDebit();

                        $debitbanque = $debitbanque + $debit->getMontant();

                    }
                    $ecrit[] = $ecriture;
                }

            }

            return $this->render('finance/journal_compte.html.twig', [
                'caisse' => $caisse - $debitcaisse,
                'banque' => $bank - $debitbanque,
                'ecritures' => $ecrit,
                'compte' => $compte,
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

    #[Route("/Brouillard", name :"brouyard") ]
    public function brouyard(EcritureRepository $repository): Response
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $ecritures = $repository->brouyard();
            $ouverture = $repository->ouverture();
            $caisse = 0;
            $caisseouv = 0;
            $banque = 0;
            $banqueouv = 0;
            $debitbanque = 0;
            $debitbanqueouv = 0;
            $debitcaisse = 0;
            $debitcaisseouv = 0;
            foreach ($ecritures as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $credit->getType() == 'Espece' ?
                        $caisse = $caisse + $credit->getMontant() :
                        $banque = $banque + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debit->getType() == 'Espece' ?
                        $debitcaisse = $debitcaisse + $debit->getMontant() :
                        $debitbanque = $debitbanque + $debit->getMontant();

                }

            }

            foreach ($ouverture as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $credit->getType() == 'Espece' ?
                        $caisseouv = $caisseouv + $credit->getMontant() :
                        $banqueouv = $banqueouv + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debit->getType() == 'Espece' ?
                        $debitcaisseouv = $debitcaisseouv + $debit->getMontant() :
                        $debitbanqueouv = $debitbanqueouv + $debit->getMontant();

                }

            }

            return $this->render('finance/brouyard.html.twig', [
                'caisse' => $caisse - $debitcaisse + $caisseouv - $debitcaisseouv,
                'banque' => $banque - $debitbanque + $banqueouv - $debitbanqueouv,
                'ecritures' => $ecritures,
                'ouverture' => ($caisseouv - $debitcaisseouv) + ($banqueouv - $debitbanqueouv)
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

    #[Route("/Brouillard_print", name :"brouyard_print") ]
    public function brouyard_print(EcritureRepository $repository): Response
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $ecritures = $repository->brouyard();
            $ouverture = $repository->ouverture();
            $caisse = 0;
            $caisseouv = 0;
            $banque = 0;
            $banqueouv = 0;
            $debitbanque = 0;
            $debitbanqueouv = 0;
            $debitcaisse = 0;
            $debitcaisseouv = 0;
            foreach ($ecritures as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $credit->getType() == 'Espece' ?
                        $caisse = $caisse + $credit->getMontant() :
                        $banque = $banque + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debit->getType() == 'Espece' ?
                        $debitcaisse = $debitcaisse + $debit->getMontant() :
                        $debitbanque = $debitbanque + $debit->getMontant();

                }

            }

            foreach ($ouverture as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $credit->getType() == 'Espece' ?
                        $caisseouv = $caisseouv + $credit->getMontant() :
                        $banqueouv = $banqueouv + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debit->getType() == 'Espece' ?
                        $debitcaisseouv = $debitcaisseouv + $debit->getMontant() :
                        $debitbanqueouv = $debitbanqueouv + $debit->getMontant();

                }

            }

            return $this->render('finance/brouyard_print.html.twig', [
                'caisse' => $caisse - $debitcaisse + $caisseouv - $debitcaisseouv,
                'banque' => $banque - $debitbanque + $banqueouv - $debitbanqueouv,
                'ecritures' => $ecritures,
                'ouverture' => ($caisseouv - $debitcaisseouv) + ($banqueouv - $debitbanqueouv)
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

    #[Route("/BrouillardCaisse", name :"brouyard_caisse") ]
    public function brouyardCaisse(EcritureRepository $repository): Response
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $ecritures = $repository->brouyardcaisse();
            $ouverture = $repository->ouverturecaisse();
            $caisse = 0;
            $caisseouv = 0;
            $debitcaisse = 0;
            $debitcaisseouv = 0;
            foreach ($ecritures as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $caisse = $caisse + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debitcaisse = $debitcaisse + $debit->getMontant();

                }

            }

            foreach ($ouverture as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $caisseouv = $caisseouv + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debitcaisseouv = $debitcaisseouv + $debit->getMontant();

                }

            }

            return $this->render('finance/brouyard_caisse.html.twig', [
                'caisse' => $caisse - $debitcaisse + $caisseouv - $debitcaisseouv,
                'ecritures' => $ecritures,
                'ouverture' => $caisseouv - $debitcaisseouv,
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

    #[Route("/BrouillardCaisse_print", name :"brouyard_caisse_print") ]
    public function brouyardCaisse_print(EcritureRepository $repository): Response
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $ecritures = $repository->brouyardcaisse();
            $ouverture = $repository->ouverturecaisse();
            $caisse = 0;
            $caisseouv = 0;
            $debitcaisse = 0;
            $debitcaisseouv = 0;
            foreach ($ecritures as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $caisse = $caisse + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debitcaisse = $debitcaisse + $debit->getMontant();

                }

            }

            foreach ($ouverture as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $caisseouv = $caisseouv + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debitcaisseouv = $debitcaisseouv + $debit->getMontant();

                }

            }

            return $this->render('finance/brouyard_caisse_print.html.twig', [
                'caisse' => $caisse - $debitcaisse + $caisseouv - $debitcaisseouv,
                'ecritures' => $ecritures,
                'ouverture' => $caisseouv - $debitcaisseouv,
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

    #[Route("/BrouillardBanque", name :"brouyard_banque") ]
    public function brouyardBanque(EcritureRepository $repository): Response
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $ecritures = $repository->brouyardbanque();
            $ouverture = $repository->ouverturebanque();
            $banque = 0;
            $banqueouv = 0;
            $debitbanque = 0;
            $debitbanqueouv = 0;
            foreach ($ecritures as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $banque = $banque + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debitbanque = $debitbanque + $debit->getMontant();

                }

            }

            foreach ($ouverture as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();

                    $banqueouv = $banqueouv + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();

                    $debitbanqueouv = $debitbanqueouv + $debit->getMontant();

                }

            }

            return $this->render('finance/brouyard_banque.html.twig', [
                'banque' => $banque - $debitbanque + $banqueouv - $debitbanqueouv,
                'ecritures' => $ecritures,
                'ouverture' => $banqueouv - $debitbanqueouv,
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

    #[Route("/BrouillardBanque_print", name :"brouyard_banque_print") ]
    public function brouyardBanque_print(EcritureRepository $repository): Response
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $ecritures = $repository->brouyardbanque();
            $ouverture = $repository->ouverturebanque();
            $banque = 0;
            $banqueouv = 0;
            $debitbanque = 0;
            $debitbanqueouv = 0;
            foreach ($ecritures as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $banque = $banque + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debitbanque = $debitbanque + $debit->getMontant();

                }

            }

            foreach ($ouverture as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();

                    $banqueouv = $banqueouv + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();

                    $debitbanqueouv = $debitbanqueouv + $debit->getMontant();

                }

            }

            return $this->render('finance/brouyard_banque_print.html.twig', [
                'banque' => $banque - $debitbanque + $banqueouv - $debitbanqueouv,
                'ecritures' => $ecritures,
                'ouverture' => $banqueouv - $debitbanqueouv,
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

    #[Route("/LienDayBrouyard", name :"day_brouyard_lien") ]
    public function liendaybrouyard(Request $request)
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $date1 = $request->get('date1');
            $lien = $this->generateUrl('finance_day_brouyard', ['jour' => $date1]);
            $res['ok'] = $lien;
            $response = new Response();
            $response->headers->set('content-type', 'application/json');
            $re = json_encode($res);
            $response->setContent($re);
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

    #[Route("/DayRepport/", name :"rapport_date") ]
    public function rapportdate()
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {

            return $this->render('finance/rapport_date.html.twig');
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

    #[Route("/DayBrouyard/{jour}", name :"day_brouyard") ]
    public function daybrouyard(Request $request, $jour)
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $repository = $this->entityManager->getRepository(Ecriture::class);
            $ecritures = $repository->daybrouyard($jour);
            $ouverture = $repository->ouvertureplace($jour);
            $caisse = 0;
            $caisseouv = 0;
            $banque = 0;
            $banqueouv = 0;
            $debitbanque = 0;
            $debitbanqueouv = 0;
            $debitcaisse = 0;
            $debitcaisseouv = 0;
            foreach ($ecritures as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $credit->getType() == 'Espece' ?
                        $caisse = $caisse + $credit->getMontant() :
                        $banque = $banque + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debit->getType() == 'Espece' ?
                        $debitcaisse = $debitcaisse + $debit->getMontant() :
                        $debitbanque = $debitbanque + $debit->getMontant();

                }

            }

            foreach ($ouverture as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $credit->getType() == 'Espece' ?
                        $caisseouv = $caisseouv + $credit->getMontant() :
                        $banqueouv = $banqueouv + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debit->getType() == 'Espece' ?
                        $debitcaisseouv = $debitcaisseouv + $debit->getMontant() :
                        $debitbanqueouv = $debitbanqueouv + $debit->getMontant();

                }

            }

            return $this->render('finance/brouyard_date.html.twig', [
                'caisse' => $caisse - $debitcaisse + $caisseouv - $debitcaisseouv,
                'banque' => $banque - $debitbanque + $banqueouv - $debitbanqueouv,
                'ecritures' => $ecritures,
                'ouverture' => ($caisseouv - $debitcaisseouv) + ($banqueouv - $debitbanqueouv),
                'day' => $jour,
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

    #[Route("/DayBrouyard_print/{jour}", name :"day_brouyard_print") ]
    public function daybrouyard_print(Request $request, $jour)
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $repository = $this->entityManager->getRepository(Ecriture::class);
            $ecritures = $repository->daybrouyard($jour);
            $ouverture = $repository->ouvertureplace($jour);
            $caisse = 0;
            $caisseouv = 0;
            $banque = 0;
            $banqueouv = 0;
            $debitbanque = 0;
            $debitbanqueouv = 0;
            $debitcaisse = 0;
            $debitcaisseouv = 0;
            foreach ($ecritures as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $credit->getType() == 'Espece' ?
                        $caisse = $caisse + $credit->getMontant() :
                        $banque = $banque + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debit->getType() == 'Espece' ?
                        $debitcaisse = $debitcaisse + $debit->getMontant() :
                        $debitbanque = $debitbanque + $debit->getMontant();

                }

            }

            foreach ($ouverture as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $credit->getType() == 'Espece' ?
                        $caisseouv = $caisseouv + $credit->getMontant() :
                        $banqueouv = $banqueouv + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debit->getType() == 'Espece' ?
                        $debitcaisseouv = $debitcaisseouv + $debit->getMontant() :
                        $debitbanqueouv = $debitbanqueouv + $debit->getMontant();

                }

            }

            return $this->render('finance/brouyard_date_print.html.twig', [
                'caisse' => $caisse - $debitcaisse + $caisseouv - $debitcaisseouv,
                'banque' => $banque - $debitbanque + $banqueouv - $debitbanqueouv,
                'ecritures' => $ecritures,
                'ouverture' => ($caisseouv - $debitcaisseouv) + ($banqueouv - $debitbanqueouv),
                'day' => $jour,
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

    #[Route("/LienDayBrouyardCaisse", name :"day_brouyard_lien_caisse") ]
    public function liendaybrouyardaisse(Request $request)
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $date1 = $request->get('date1');
            $lien = $this->generateUrl('finance_day_brouyard_caisse', ['jour' => $date1]);
            $res['ok'] = $lien;
            $response = new Response();
            $response->headers->set('content-type', 'application/json');
            $re = json_encode($res);
            $response->setContent($re);
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

    #[Route("/DayBrouyardCaisse/{jour}", name :"day_brouyard_caisse") ]
    public function daybrouyardcaisse(Request $request, $jour)
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $repository = $this->entityManager->getRepository(Ecriture::class);
            $ecritures = $repository->daybrouyardcaisse($jour);
            $ouverture = $repository->ouvertureplacecaisse($jour);
            $caisse = 0;
            $caisseouv = 0;
            $banque = 0;
            $banqueouv = 0;
            $debitbanque = 0;
            $debitbanqueouv = 0;
            $debitcaisse = 0;
            $debitcaisseouv = 0;
            foreach ($ecritures as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $caisse = $caisse + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debitcaisse = $debitcaisse + $debit->getMontant();

                }

            }

            foreach ($ouverture as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $caisseouv = $caisseouv + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debitcaisseouv = $debitcaisseouv + $debit->getMontant();

                }

            }

            return $this->render('finance/brouyard_date_caisse.html.twig', [
                'caisse' => $caisse - $debitcaisse + $caisseouv - $debitcaisseouv,
                'ecritures' => $ecritures,
                'ouverture' => $caisseouv - $debitcaisseouv,
                'day' => $jour,
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

    #[Route("/DayBrouyardCaisse_print/{jour}", name :"day_brouyard_caisse_print") ]
    public function daybrouyardcaisse_print(Request $request, $jour)
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $repository = $this->entityManager->getRepository(Ecriture::class);
            $ecritures = $repository->daybrouyardcaisse($jour);
            $ouverture = $repository->ouvertureplacecaisse($jour);
            $caisse = 0;
            $caisseouv = 0;
            $banque = 0;
            $banqueouv = 0;
            $debitbanque = 0;
            $debitbanqueouv = 0;
            $debitcaisse = 0;
            $debitcaisseouv = 0;
            foreach ($ecritures as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $caisse = $caisse + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debitcaisse = $debitcaisse + $debit->getMontant();

                }

            }

            foreach ($ouverture as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $caisseouv = $caisseouv + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debitcaisseouv = $debitcaisseouv + $debit->getMontant();

                }

            }

            return $this->render('finance/brouyard_date_caisse_print.html.twig', [
                'caisse' => $caisse - $debitcaisse + $caisseouv - $debitcaisseouv,
                'ecritures' => $ecritures,
                'ouverture' => $caisseouv - $debitcaisseouv,
                'day' => $jour,
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

    #[Route("/LienDayBrouyardBanque", name :"day_brouyard_lien_banque") ]
    public function liendaybrouyarbanque(Request $request)
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $date1 = $request->get('date1');
            $lien = $this->generateUrl('finance_day_brouyard_banque', ['jour' => $date1]);
            $res['ok'] = $lien;
            $response = new Response();
            $response->headers->set('content-type', 'application/json');
            $re = json_encode($res);
            $response->setContent($re);
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


    #[Route("/DayBrouyardBanque/{jour}", name :"day_brouyard_banque") ]
    public function daybrouyardbanque(Request $request, $jour)
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $repository = $this->entityManager->getRepository(Ecriture::class);
            $ecritures = $repository->daybrouyardbanque($jour);
            $ouverture = $repository->ouvertureplacebanque($jour);
            $caisse = 0;
            $caisseouv = 0;
            $banque = 0;
            $banqueouv = 0;
            $debitbanque = 0;
            $debitbanqueouv = 0;
            $debitcaisse = 0;
            $debitcaisseouv = 0;
            foreach ($ecritures as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $banque = $banque + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debitbanque = $debitbanque + $debit->getMontant();

                }

            }

            foreach ($ouverture as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $banqueouv = $banqueouv + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debitbanqueouv = $debitbanqueouv + $debit->getMontant();

                }

            }

            return $this->render('finance/brouyard_date_banque.html.twig', [
                'banque' => $banque - $debitbanque + $banqueouv - $debitbanqueouv,
                'ecritures' => $ecritures,
                'ouverture' => $banqueouv - $debitbanqueouv,
                'day' => $jour,
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

    #[Route("/DayBrouyardBanque_print/{jour}", name :"day_brouyard_banque_print") ]
    public function daybrouyardbanque_print(Request $request, $jour)
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $repository = $this->entityManager->getRepository(Ecriture::class);
            $ecritures = $repository->daybrouyardbanque($jour);
            $ouverture = $repository->ouvertureplacebanque($jour);
            $caisse = 0;
            $caisseouv = 0;
            $banque = 0;
            $banqueouv = 0;
            $debitbanque = 0;
            $debitbanqueouv = 0;
            $debitcaisse = 0;
            $debitcaisseouv = 0;
            foreach ($ecritures as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $banque = $banque + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debitbanque = $debitbanque + $debit->getMontant();

                }

            }

            foreach ($ouverture as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $banqueouv = $banqueouv + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debitbanqueouv = $debitbanqueouv + $debit->getMontant();

                }

            }

            return $this->render('finance/brouyard_date_banque_print.html.twig', [
                'banque' => $banque - $debitbanque + $banqueouv - $debitbanqueouv,
                'ecritures' => $ecritures,
                'ouverture' => $banqueouv - $debitbanqueouv,
                'day' => $jour,
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


    #[Route("/IntervalRepport/", name :"rapport_interval") ]
    public function rapportinterval()
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {

            return $this->render('finance/rapport_interval.html.twig');
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

    #[Route("/LienDaysBrouyard", name :"days_brouyard_lien") ]
    public function liendaysbrouyard(Request $request)
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $date1 = $request->get('date1');
            $date2 = $request->get('date2');
            $lien = $this->generateUrl('finance_days_brouyard', ['date1' => $date1, 'date2' => $date2]);
            $res['ok'] = $lien;
            $response = new Response();
            $response->headers->set('content-type', 'application/json');
            $re = json_encode($res);
            $response->setContent($re);
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


    #[Route("/DaysBrouyard/{date1}/{date2}", name :"days_brouyard") ]
    public function daysbrouyard(Request $request, $date1, $date2)
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {

            $repository = $this->entityManager->getRepository(Ecriture::class);
            $ecritures = $repository->plage($date1, $date2);
            $ouverture = $repository->ouvertureplace($date1);
            $caisse = 0;
            $caisseouv = 0;
            $banque = 0;
            $banqueouv = 0;
            $debitbanque = 0;
            $debitbanqueouv = 0;
            $debitcaisse = 0;
            $debitcaisseouv = 0;
            foreach ($ecritures as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $credit->getType() == 'Espece' ?
                        $caisse = $caisse + $credit->getMontant() :
                        $banque = $banque + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debit->getType() == 'Espece' ?
                        $debitcaisse = $debitcaisse + $debit->getMontant() :
                        $debitbanque = $debitbanque + $debit->getMontant();

                }

            }

            foreach ($ouverture as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $credit->getType() == 'Espece' ?
                        $caisseouv = $caisseouv + $credit->getMontant() :
                        $banqueouv = $banqueouv + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debit->getType() == 'Espece' ?
                        $debitcaisseouv = $debitcaisseouv + $debit->getMontant() :
                        $debitbanqueouv = $debitbanqueouv + $debit->getMontant();

                }

            }

            return $this->render('finance/brouyard_interval.html.twig', [
                'caisse' => $caisse - $debitcaisse + $caisseouv - $debitcaisseouv,
                'banque' => $banque - $debitbanque + $banqueouv - $debitbanqueouv,
                'ecritures' => $ecritures,
                'ouverture' => ($caisseouv - $debitcaisseouv) + ($banqueouv - $debitbanqueouv),
                'day1' => $date1,
                'day2' => $date2,
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

    #[Route("/DaysBrouyard_print/{date1}/{date2}", name :"days_brouyard_print") ]
    public function daysbrouyard_print(Request $request, $date1, $date2)
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {

            $repository = $this->entityManager->getRepository(Ecriture::class);
            $ecritures = $repository->plage($date1, $date2);
            $ouverture = $repository->ouvertureplace($date1);
            $caisse = 0;
            $caisseouv = 0;
            $banque = 0;
            $banqueouv = 0;
            $debitbanque = 0;
            $debitbanqueouv = 0;
            $debitcaisse = 0;
            $debitcaisseouv = 0;
            foreach ($ecritures as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $credit->getType() == 'Espece' ?
                        $caisse = $caisse + $credit->getMontant() :
                        $banque = $banque + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debit->getType() == 'Espece' ?
                        $debitcaisse = $debitcaisse + $debit->getMontant() :
                        $debitbanque = $debitbanque + $debit->getMontant();

                }

            }

            foreach ($ouverture as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $credit->getType() == 'Espece' ?
                        $caisseouv = $caisseouv + $credit->getMontant() :
                        $banqueouv = $banqueouv + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debit->getType() == 'Espece' ?
                        $debitcaisseouv = $debitcaisseouv + $debit->getMontant() :
                        $debitbanqueouv = $debitbanqueouv + $debit->getMontant();

                }

            }

            return $this->render('finance/brouyard_interval_print.html.twig', [
                'caisse' => $caisse - $debitcaisse + $caisseouv - $debitcaisseouv,
                'banque' => $banque - $debitbanque + $banqueouv - $debitbanqueouv,
                'ecritures' => $ecritures,
                'ouverture' => ($caisseouv - $debitcaisseouv) + ($banqueouv - $debitbanqueouv),
                'day1' => $date1,
                'day2' => $date2,
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

    #[Route("/LienDaysBrouyardCaisse", name :"days_brouyard_lien_caisse") ]
    public function liendaysbrouyardcaisse(Request $request)
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $date1 = $request->get('date1');
            $date2 = $request->get('date2');
            $lien = $this->generateUrl('finance_days_brouyard_caisse', ['date1' => $date1, 'date2' => $date2]);
            $res['ok'] = $lien;
            $response = new Response();
            $response->headers->set('content-type', 'application/json');
            $re = json_encode($res);
            $response->setContent($re);
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


    #[Route("/DaysBrouyardCaisse/{date1}/{date2}", name :"days_brouyard_caisse") ]
    public function daysbrouyardcaisse(Request $request, $date1, $date2)
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {

            $repository = $this->entityManager->getRepository(Ecriture::class);
            $ecritures = $repository->plagecaisse($date1, $date2);
            $ouverture = $repository->ouvertureplacecaisse($date1);
            $caisse = 0;
            $caisseouv = 0;
            $debitcaisse = 0;
            $debitcaisseouv = 0;
            foreach ($ecritures as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $caisse = $caisse + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debitcaisse = $debitcaisse + $debit->getMontant();

                }

            }

            foreach ($ouverture as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $caisseouv = $caisseouv + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debitcaisseouv = $debitcaisseouv + $debit->getMontant();

                }

            }

            return $this->render('finance/brouyard_interval_caisse.html.twig', [
                'caisse' => $caisse - $debitcaisse + $caisseouv - $debitcaisseouv,
                'ecritures' => $ecritures,
                'ouverture' => $caisseouv - $debitcaisseouv,
                'day1' => $date1,
                'day2' => $date2,
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

    #[Route("/DaysBrouyardCaisse_print/{date1}/{date2}", name :"days_brouyard_caisse_print") ]
    public function daysbrouyardcaisse_print(Request $request, $date1, $date2)
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {

            $repository = $this->entityManager->getRepository(Ecriture::class);
            $ecritures = $repository->plagecaisse($date1, $date2);
            $ouverture = $repository->ouvertureplacecaisse($date1);
            $caisse = 0;
            $caisseouv = 0;
            $debitcaisse = 0;
            $debitcaisseouv = 0;
            foreach ($ecritures as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $caisse = $caisse + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debitcaisse = $debitcaisse + $debit->getMontant();

                }

            }

            foreach ($ouverture as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $caisseouv = $caisseouv + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debitcaisseouv = $debitcaisseouv + $debit->getMontant();

                }

            }

            return $this->render('finance/brouyard_interval_caisse_print.html.twig', [
                'caisse' => $caisse - $debitcaisse + $caisseouv - $debitcaisseouv,
                'ecritures' => $ecritures,
                'ouverture' => $caisseouv - $debitcaisseouv,
                'day1' => $date1,
                'day2' => $date2,
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


    #[Route("/LienDaysBrouyardBanque", name :"days_brouyard_lien_banque") ]
    public function liendaysbrouyardbanque(Request $request)
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $date1 = $request->get('date1');
            $date2 = $request->get('date2');
            $lien = $this->generateUrl('finance_days_brouyard_banque', ['date1' => $date1, 'date2' => $date2]);
            $res['ok'] = $lien;
            $response = new Response();
            $response->headers->set('content-type', 'application/json');
            $re = json_encode($res);
            $response->setContent($re);
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


    #[Route("/DaysBrouyardBanque/{date1}/{date2}", name :"days_brouyard_banque") ]
    public function daysbrouyardbanque(Request $request, $date1, $date2)
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {

            $repository = $this->entityManager->getRepository(Ecriture::class);
            $ecritures = $repository->plagebanque($date1, $date2);
            $ouverture = $repository->ouvertureplacebanque($date1);
            $caisse = 0;
            $caisseouv = 0;
            $banque = 0;
            $banqueouv = 0;
            $debitbanque = 0;
            $debitbanqueouv = 0;
            $debitcaisse = 0;
            $debitcaisseouv = 0;
            foreach ($ecritures as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $banque = $banque + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debitbanque = $debitbanque + $debit->getMontant();

                }

            }

            foreach ($ouverture as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $banqueouv = $banqueouv + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debitbanqueouv = $debitbanqueouv + $debit->getMontant();

                }

            }

           
            $response = $this->render('finance/brouyard_interval_banque.html.twig', [
                'banque' => $banque - $debitbanque + $banqueouv - $debitbanqueouv,
                'ecritures' => $ecritures,
                'ouverture' => $banqueouv - $debitbanqueouv,
                'day1' => $date1,
                'day2' => $date2,
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

    #[Route("/DaysBrouyardBanque_print/{date1}/{date2}", name :"days_brouyard_banque_print") ]
    public function daysbrouyardbanque_print(Request $request, $date1, $date2)
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {

            $repository = $this->entityManager->getRepository(Ecriture::class);
            $ecritures = $repository->plagebanque($date1, $date2);
            $ouverture = $repository->ouvertureplacebanque($date1);
            $caisse = 0;
            $caisseouv = 0;
            $banque = 0;
            $banqueouv = 0;
            $debitbanque = 0;
            $debitbanqueouv = 0;
            $debitcaisse = 0;
            $debitcaisseouv = 0;
            foreach ($ecritures as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $banque = $banque + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debitbanque = $debitbanque + $debit->getMontant();

                }

            }

            foreach ($ouverture as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $banqueouv = $banqueouv + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debitbanqueouv = $debitbanqueouv + $debit->getMontant();

                }

            }

            return $this->render('finance/brouyard_interval_banque_print.html.twig', [
                'banque' => $banque - $debitbanque + $banqueouv - $debitbanqueouv,
                'ecritures' => $ecritures,
                'ouverture' => $banqueouv - $debitbanqueouv,
                'day1' => $date1,
                'day2' => $date2,
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


    #[Route("/Salaire", name :"salaire", methods : ["GET"]) ]
    public function salaire(PaieRepository $paieRepository): Response
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $paie = $paieRepository->findBy(['payer' => false]);
            
            $response = $this->render('finance/salaire.html.twig', [
                'paies' => $paie,
                'banques' => $this->entityManager->getRepository(Banque::class)->findAll(),
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

    #[Route("/payer", name :"payer", methods : ["POST"]) ]
    public function payer(PaieRepository $paieRepository, Solde $solde, Request $request): Response
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            
            $entityManager = $this->entityManager;
            $paie = $paieRepository->find($request->get('paie'));
            $banque = $entityManager->getRepository(Banque::class)->find($request->get('banque'));


            $montant = 0;

            $montant = $solde->montantbanque($entityManager, $banque->getCompte());
            $montantapayer = $paie->getBrut() + $paie->getTotalchargepatronal();

            if ($montantapayer <= $montant) {
               
                $paieSalaire = new PaieSalaire();


            $debitbase = new Debit();
            $debitbase->setCompte($banque->getCompte());
            $debitbase->setType('Banque');
            $debitbase->setSalaire($paieSalaire);
            $debitbase->setMontant($paie->getSalaireNet());

            $ecriturebase = new Ecriture();
            $ecriturebase->setType('Banque');
            $ecriturebase->setComptecredit("661100");
            $ecriturebase->setLibellecomptecredit("Salaire Net");
            $ecriturebase->setComptedebit($banque->getCompte());
            $ecriturebase->setLibellecomptedebit($banque->getNom());
            $ecriturebase->setDebit($debitbase);
            $ecriturebase->setSolde(-$paie->getSalaireNet());
            $ecriturebase->setMontant($paie->getSalaireNet());
            $ecriturebase->setLibelle("Salaire Net".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
            $entityManager->persist($debitbase);
            $entityManager->persist($ecriturebase);

            // anciennete 
            $ancien = $paie->getTauxenciennete() * $paie->getBaseenciennete();
            if( $ancien != 0){
                $debitanciennete = new Debit();
                $debitanciennete->setCompte($banque->getCompte());
                $debitanciennete->setType('Banque');
                $debitanciennete->setSalaire($paieSalaire);
                $debitanciennete->setMontant($ancien);

                $ecritureanciennete = new Ecriture();
                $ecritureanciennete->setType('Banque');
                $ecritureanciennete->setComptecredit("661200");
                $ecritureanciennete->setLibellecomptecredit("Prime d'anciennete");
                $ecritureanciennete->setComptedebit($banque->getCompte());
                $ecritureanciennete->setLibellecomptedebit($banque->getNom());
                $ecritureanciennete->setDebit($debitanciennete);
                $ecritureanciennete->setSolde(-$ancien);
                $ecritureanciennete->setMontant($ancien);
                $ecritureanciennete->setLibelle("Prime d'anciennete ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                $entityManager->persist($debitanciennete);
                $entityManager->persist($ecritureanciennete);
            }
           
            


            $primes = json_decode($paie->getIndemnite(), true);
            $i= 1; $j= 100;
            foreach ($primes as $prime) {

                $$i = new Debit();
                $$i->setCompte($banque->getCompte());
                $$i->setType('Banque');
                $$i->setSalaire($paieSalaire);
                $$i->setMontant($prime['montant']);

                $$j = new Ecriture();
                $$j->setType('Banque');
                $$j->setComptecredit("661200");
                $$j->setLibellecomptecredit($prime['designation']);
                $$j->setComptedebit($banque->getCompte());
                $$j->setLibellecomptedebit($banque->getNom());
                $$j->setDebit($$i);
                $$j->setSolde(-$prime['montant']);
                $$j->setMontant($prime['montant']);
                $$j->setLibelle($prime['designation']. " " .$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                $entityManager->persist($$i);
                $entityManager->persist($$j);
               $i +=1;
               $j +=1;
            }


            $heureSup =  $paie->getTauxheureSup() * $paie->getBaseheureSup();
            if( $heureSup != 0){
                $debitheursup = new Debit();
                $debitheursup->setCompte($banque->getCompte());
                $debitheursup->setType('Banque');
                $debitheursup->setSalaire($paieSalaire);
                $debitheursup->setMontant($heureSup);

                $ecritureheursup = new Ecriture();
                $ecritureheursup->setType('Banque');
                $ecritureheursup->setComptecredit("661200");
                $ecritureheursup->setLibellecomptecredit("Heures Suplementaires");
                $ecritureheursup->setComptedebit($banque->getCompte());
                $ecritureheursup->setLibellecomptedebit($banque->getNom());
                $ecritureheursup->setDebit($debitheuresup);
                $ecritureheursup->setSolde(-$heureSup);
                $ecritureheursup->setMontant($heureSup);
                $ecritureheursup->setLibelle("Heures Suplementaires ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                $entityManager->persist($debitheursup);
                $entityManager->persist($ecritureheursup);

            }
            if($paie->getPerformance() != 0){
                $debitperform = new Debit();
                $debitperform->setCompte($banque->getCompte());
                $debitperform->setType('Banque');
                $debitperform->setSalaire($paieSalaire);
                $debitperform->setMontant($paie->getPerformance());

                $ecritureperform = new Ecriture();
                $ecritureperform->setType('Banque');
                $ecritureperform->setComptecredit("661200");
                $ecritureperform->setLibellecomptecredit("prime de performance");
                $ecritureperform->setComptedebit($banque->getCompte());
                $ecritureperform->setLibellecomptedebit($banque->getNom());
                $ecritureperform->setDebit($debitperform);
                $ecritureperform->setSolde(-$paie->getPerformance());
                $ecritureperform->setMontant($paie->getPerformance());
                $ecritureperform->setLibelle("prime de performance ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                $entityManager->persist($debitperform);
                $entityManager->persist($ecritureperform);
            }


          

   //         $paie->getBrut();
// salaire brut
            

            // $ecritureperform = new Ecriture();
            // $ecritureperform->setType('Banque');
            // $ecritureperform->setComptecredit("661200");
            // $ecritureperform->setLibellecomptecredit("prime de performance");
            // $ecritureperform->setComptedebit($banque->getCompte());
            // $ecritureperform->setLibellecomptedebit($banque->getNom());
            // $ecritureperform->setDebit($debit);
            // $ecritureperform->setSolde(-$paie->getPerformance());
            // $ecritureperform->setMontant($paie->getPerformance());
            // $ecritureperform->setLibelle("prime de performance ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
            // $entityManager->persist($debitperform);
            // $entityManager->persist($ecritureperform);
           

          

            /** irpp */
           
            
            $debitirpp = new Debit();
            $debitirpp->setCompte($banque->getCompte());
            $debitirpp->setType('Banque');
            $debitirpp->setSalaire($paieSalaire);
            $debitirpp->setMontant($paie->getIrpp());

            $ecritureirpp = new Ecriture();
            $ecritureirpp->setType('Banque');
            $ecritureirpp->setComptecredit("447210");
            $ecritureirpp->setLibellecomptecredit("IRPP");
            $ecritureirpp->setComptedebit($banque->getCompte());
            $ecritureirpp->setLibellecomptedebit($banque->getNom());
            $ecritureirpp->setDebit($debitirpp);
            $ecritureirpp->setSolde(-$paie->getIrpp());
            $ecritureirpp->setMontant($paie->getIrpp());
            $ecritureirpp->setLibelle("IRPP ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
            $entityManager->persist($debitirpp);
            $entityManager->persist($ecritureirpp);

          //CA
            ;

            $debitca = new Debit();
            $debitca->setCompte($banque->getCompte());
            $debitca->setType('Banque');
            $debitca->setSalaire($paieSalaire);
            $debitca->setMontant($paie->getCa());

            $ecritureca = new Ecriture();
            $ecritureca->setType('Banque');
            $ecritureca->setComptecredit("447220");
            $ecritureca->setLibellecomptecredit("Centimes additionnels");
            $ecritureca->setComptedebit($banque->getCompte());
            $ecritureca->setLibellecomptedebit($banque->getNom());
            $ecritureca->setDebit($debitca);
            $ecritureca->setSolde(-$paie->getCa());
            $ecritureca->setMontant($paie->getCa());
            $ecritureca->setLibelle("Centimes additionnels ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
            $entityManager->persist($debitca);
            $entityManager->persist($ecritureca);
           
            /** dve local */
           
            $debitlocal = new Debit();
            $debitlocal->setCompte($banque->getCompte());
            $debitlocal->setType('Banque');
            $debitlocal->setSalaire($paieSalaire);
            $debitlocal->setMontant($paie->getLocal());

            $ecriturelocal = new Ecriture();
            $ecriturelocal->setType('Banque');
            $ecriturelocal->setComptecredit("447240");
            $ecriturelocal->setLibellecomptecredit("Taxe de développement local");
            $ecriturelocal->setComptedebit($banque->getCompte());
            $ecriturelocal->setLibellecomptedebit($banque->getNom());
            $ecriturelocal->setDebit($debitlocal);
            $ecriturelocal->setSolde(-$paie->getLocal());
            $ecriturelocal->setMontant($paie->getLocal());
            $ecriturelocal->setLibelle("Taxe de développement local ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
            $entityManager->persist($debitlocal);
            $entityManager->persist($ecriturelocal);
           
            /** vcnps viel */
           
            

            $debitviel = new Debit();
            $debitviel->setCompte($banque->getCompte());
            $debitviel->setType('Banque');
            $debitviel->setSalaire($paieSalaire);
            $debitviel->setMontant($paie->getVieil());

            $ecritureviel = new Ecriture();
            $ecritureviel->setType('Banque');
            $ecritureviel->setComptecredit("431300");
            $ecritureviel->setLibellecomptecredit("CNPS / Pension Vieillesse");
            $ecritureviel->setComptedebit($banque->getCompte());
            $ecritureviel->setLibellecomptedebit($banque->getNom());
            $ecritureviel->setDebit($debitviel);
            $ecritureviel->setSolde(-$paie->getVieil());
            $ecritureviel->setMontant($paie->getVieil());
            $ecritureviel->setLibelle("CNPS / Pension Vieillesse ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
            $entityManager->persist($debitviel);
            $entityManager->persist($ecritureviel);
            
            /** fonfoncier */
           
            
            if($paie->getFoncier() != 0){
                $debifoncier = new Debit();
                $debifoncier->setCompte($banque->getCompte());
                $debifoncier->setType('Banque');
                $debifoncier->setSalaire($paieSalaire);
                $debifoncier->setMontant($paie->getFoncier());

                $ecriturfoncier = new Ecriture();
                $ecriturfoncier->setType('Banque');
                $ecriturfoncier->setComptecredit("431200");
                $ecriturfoncier->setLibellecomptecredit("Credit foncier");
                $ecriturfoncier->setComptedebit($banque->getCompte());
                $ecriturfoncier->setLibellecomptedebit($banque->getNom());
                $ecriturfoncier->setDebit($debifoncier);
                $ecriturfoncier->setSolde(-$paie->getFoncier());
                $ecriturfoncier->setMontant($paie->getFoncier());
                $ecriturfoncier->setLibelle("Credit foncier ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                $entityManager->persist($debifoncier);
                $entityManager->persist($ecriturfoncier);
            }
            
            /** crtv */
           
            
            if($paie->getCrtv() != 0){
                $debicrtv = new Debit();
                $debicrtv->setCompte($banque->getCompte());
                $debicrtv->setType('Banque');
                $debicrtv->setSalaire($paieSalaire);
                $debicrtv->setMontant($paie->getCrtv());

                $ecriturcrtv = new Ecriture();
                $ecriturcrtv->setType('Banque');
                $ecriturcrtv->setComptecredit("447250");
                $ecriturcrtv->setLibellecomptecredit("Redevance audio visuelle (CRTV)");
                $ecriturcrtv->setComptedebit($banque->getCompte());
                $ecriturcrtv->setLibellecomptedebit($banque->getNom());
                $ecriturcrtv->setDebit($debicrtv);
                $ecriturcrtv->setSolde(-$paie->getCrtv());
                $ecriturcrtv->setMontant($paie->getCrtv());
                $ecriturcrtv->setLibelle("Redevance audio visuelle (CRTV) ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                $entityManager->persist($debicrtv);
                $entityManager->persist($ecriturcrtv);
            }

            /** allocation */
           
            
            if($paie->getAllocation() != 0){
                $debiallocation = new Debit();
                $debiallocation->setCompte($banque->getCompte());
                $debiallocation->setType('Banque');
                $debiallocation->setSalaire($paieSalaire);
                $debiallocation->setMontant($paie->getAllocation());

                $ecriturallocation = new Ecriture();
                $ecriturallocation->setType('Banque');
                $ecriturallocation->setComptecredit("431100");
                $ecriturallocation->setLibellecomptecredit("ALLOC FAM");
                $ecriturallocation->setComptedebit($banque->getCompte());
                $ecriturallocation->setLibellecomptedebit($banque->getNom());
                $ecriturallocation->setDebit($debiallocation);
                $ecriturallocation->setSolde(-$paie->getAllocation());
                $ecriturallocation->setMontant($paie->getAllocation());
                $ecriturallocation->setLibelle("ALLOC FAM ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                $entityManager->persist($debiallocation);
                $entityManager->persist($ecriturallocation);
            }
            
            /** cp vieil */
           
            
            if($paie->getCpvieil() != 0){
                $debiallocation = new Debit();
                $debiallocation->setCompte($banque->getCompte());
                $debiallocation->setType('Banque');
                $debiallocation->setSalaire($paieSalaire);
                $debiallocation->setMontant($paie->getCpvieil());

                $ecriturallocation = new Ecriture();
                $ecriturallocation->setType('Banque');
                $ecriturallocation->setComptecredit("431300");
                $ecriturallocation->setLibellecomptecredit("PENS VIEIL");
                $ecriturallocation->setComptedebit($banque->getCompte());
                $ecriturallocation->setLibellecomptedebit($banque->getNom());
                $ecriturallocation->setDebit($debiallocation);
                $ecriturallocation->setSolde(-$paie->getCpvieil());
                $ecriturallocation->setMontant($paie->getCpvieil());
                $ecriturallocation->setLibelle("PENS VIEIL ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                $entityManager->persist($debiallocation);
                $entityManager->persist($ecriturallocation);
            }

            /** trav */
          
            
            if($paie->getTav() != 0){
                $debitav = new Debit();
                $debitav->setCompte($banque->getCompte());
                $debitav->setType('Banque');
                $debitav->setSalaire($paieSalaire);
                $debitav->setMontant($paie->getTav());

                $ecriturtav = new Ecriture();
                $ecriturtav->setType('Banque');
                $ecriturtav->setComptecredit("431200");
                $ecriturtav->setLibellecomptecredit("ACC TRAV");
                $ecriturtav->setComptedebit($banque->getCompte());
                $ecriturtav->setLibellecomptedebit($banque->getNom());
                $ecriturtav->setDebit($debitav);
                $ecriturtav->setSolde(-$paie->getTav());
                $ecriturtav->setMontant($paie->getTav());
                $ecriturtav->setLibelle("ACC TRAV ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                $entityManager->persist($debitav);
                $entityManager->persist($ecriturtav);
            }

            /** cp foncier */
           
            
            if($paie->getCpfoncier() != 0){
                $debitav = new Debit();
                $debitav->setCompte($banque->getCompte());
                $debitav->setType('Banque');
                $debitav->setSalaire($paieSalaire);
                $debitav->setMontant($paie->getCpfoncier());

                $ecriturtav = new Ecriture();
                $ecriturtav->setType('Banque');
                $ecriturtav->setComptecredit("431200");
                $ecriturtav->setLibellecomptecredit("CREDIT FONC");
                $ecriturtav->setComptedebit($banque->getCompte());
                $ecriturtav->setLibellecomptedebit($banque->getNom());
                $ecriturtav->setDebit($debitav);
                $ecriturtav->setSolde(-$paie->getCpfoncier());
                $ecriturtav->setMontant($paie->getCpfoncier());
                $ecriturtav->setLibelle("CREDIT FONC ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                $entityManager->persist($debitav);
                $entityManager->persist($ecriturtav);
            }

            /** fne */
           
            
            if($paie->getFne() != 0){
                $debifne = new Debit();
                $debifne->setCompte($banque->getCompte());
                $debifne->setType('Banque');
                $debifne->setSalaire($paieSalaire);
                $debifne->setMontant($paie->getFne());

                $ecriturfne = new Ecriture();
                $ecriturfne->setType('Banque');
                $ecriturfne->setComptecredit("431300");
                $ecriturfne->setLibellecomptecredit("F.N.E");
                $ecriturfne->setComptedebit($banque->getCompte());
                $ecriturfne->setLibellecomptedebit($banque->getNom());
                $ecriturfne->setDebit($debifne);
                $ecriturfne->setSolde(-$paie->getFne());
                $ecriturfne->setMontant($paie->getFne());
                $ecriturfne->setLibelle("F.N.E ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                $entityManager->persist($debifne);
                $entityManager->persist($ecriturfne);
            }

           


          
               
                $paieSalaire->setUser($this->getUser());
                $paieSalaire->setMontant($paie->getSalaireNet());
                $paieSalaire->setEmploye($paie->getEmploye());
                $paieSalaire->setCompte($banque->getCompte());
                $entityManager->persist($paieSalaire);
                $paie->setPayer(true);
                $paie->setDatepaye(new \DateTime());
                $entityManager->persist($paie);

               $entityManager->flush();
                $this->addFlash('notice', 'Paiement effectué avec succès');

//                    return $this->redirectToRoute('depense_index', [], Response::HTTP_SEE_OTHER);
            } else {
                $this->addFlash('notice', 'Montant non disponible');
            }




            $res['id'] = 'ok';


            $response = new Response();
            $response->headers->set('content-type', 'application/json');
            $re = json_encode($res);
            $response->setContent($re);
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

    #[Route("/payerTous", name :"payerTous", methods : ["POST"]) ]
    public function payertous(PaieRepository $paieRepository, Solde $solde, Request $request): Response
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {

            $entityManager = $this->entityManager;
            $montant = $request->get('montant');
            $banque = $entityManager->getRepository(Banque::class)->find($request->get('banque'));

            $solde = $solde->montantbanque($entityManager, $banque->getCompte());

            if ($montant <= $solde) {
                $paies = $paieRepository->findBy(['payer' => false]);



                $montantNet = 0;
                $montantcharge = 0;
                $montantimpot = 0;
                foreach ($paies as $paie) {
                       
                        $paieSalaire = new PaieSalaire();
        
        
                    $debitbase = new Debit();
                    $debitbase->setCompte($banque->getCompte());
                    $debitbase->setType('Banque');
                    $debitbase->setSalaire($paieSalaire);
                    $debitbase->setMontant($paie->getSalaireNet());
        
                    $ecriturebase = new Ecriture();
                    $ecriturebase->setType('Banque');
                    $ecriturebase->setComptecredit("422100");
                    $ecriturebase->setLibellecomptecredit("Salaire Net");
                    $ecriturebase->setComptedebit($banque->getCompte());
                    $ecriturebase->setLibellecomptedebit($banque->getNom());
                    $ecriturebase->setDebit($debitbase);
                    $ecriturebase->setSolde(-$paie->getSalaireNet());
                    $ecriturebase->setMontant($paie->getSalaireNet());
                    $ecriturebase->setLibelle("Salaire Net".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                    $entityManager->persist($debitbase);
                    $entityManager->persist($ecriturebase);
        
                    // anciennete 
                    $ancien = $paie->getTauxenciennete() * $paie->getBaseenciennete();
                    if( $ancien != 0){
                        $debitanciennete = new Debit();
                        $debitanciennete->setCompte($banque->getCompte());
                        $debitanciennete->setType('Banque');
                        $debitanciennete->setSalaire($paieSalaire);
                        $debitanciennete->setMontant($ancien);
        
                        $ecritureanciennete = new Ecriture();
                        $ecritureanciennete->setType('Banque');
                        $ecritureanciennete->setComptecredit("661200");
                        $ecritureanciennete->setLibellecomptecredit("Prime d'anciennete");
                        $ecritureanciennete->setComptedebit($banque->getCompte());
                        $ecritureanciennete->setLibellecomptedebit($banque->getNom());
                        $ecritureanciennete->setDebit($debitanciennete);
                        $ecritureanciennete->setSolde(-$ancien);
                        $ecritureanciennete->setMontant($ancien);
                        $ecritureanciennete->setLibelle("Prime d'anciennete ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                        $entityManager->persist($debitanciennete);
                        $entityManager->persist($ecritureanciennete);
                    }
                   
                    
        
        
                    $primes = json_decode($paie->getIndemnite(), true);
                    $i= 1; $j= 100;
                    foreach ($primes as $prime) {
        
                        $$i = new Debit();
                        $$i->setCompte($banque->getCompte());
                        $$i->setType('Banque');
                        $$i->setSalaire($paieSalaire);
                        $$i->setMontant($prime['montant']);
        
                        $$j = new Ecriture();
                        $$j->setType('Banque');
                        $$j->setComptecredit("661200");
                        $$j->setLibellecomptecredit($prime['designation']);
                        $$j->setComptedebit($banque->getCompte());
                        $$j->setLibellecomptedebit($banque->getNom());
                        $$j->setDebit($$i);
                        $$j->setSolde(-$prime['montant']);
                        $$j->setMontant($prime['montant']);
                        $$j->setLibelle($prime['designation']. " " .$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                        $entityManager->persist($$i);
                        $entityManager->persist($$j);
                       $i +=1;
                       $j +=1;
                    }
        
        
                    $heureSup =  $paie->getTauxheureSup() * $paie->getBaseheureSup();
                    if( $heureSup != 0){
                        $debitheursup = new Debit();
                        $debitheursup->setCompte($banque->getCompte());
                        $debitheursup->setType('Banque');
                        $debitheursup->setSalaire($paieSalaire);
                        $debitheursup->setMontant($heureSup);
        
                        $ecritureheursup = new Ecriture();
                        $ecritureheursup->setType('Banque');
                        $ecritureheursup->setComptecredit("661200");
                        $ecritureheursup->setLibellecomptecredit("Heures Suplementaires");
                        $ecritureheursup->setComptedebit($banque->getCompte());
                        $ecritureheursup->setLibellecomptedebit($banque->getNom());
                        $ecritureheursup->setDebit($debitheuresup);
                        $ecritureheursup->setSolde(-$heureSup);
                        $ecritureheursup->setMontant($heureSup);
                        $ecritureheursup->setLibelle("Heures Suplementaires ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                        $entityManager->persist($debitheursup);
                        $entityManager->persist($ecritureheursup);
        
                    }
                    if($paie->getPerformance() != 0){
                        $debitperform = new Debit();
                        $debitperform->setCompte($banque->getCompte());
                        $debitperform->setType('Banque');
                        $debitperform->setSalaire($paieSalaire);
                        $debitperform->setMontant($paie->getPerformance());
        
                        $ecritureperform = new Ecriture();
                        $ecritureperform->setType('Banque');
                        $ecritureperform->setComptecredit("661200");
                        $ecritureperform->setLibellecomptecredit("prime de performance");
                        $ecritureperform->setComptedebit($banque->getCompte());
                        $ecritureperform->setLibellecomptedebit($banque->getNom());
                        $ecritureperform->setDebit($debitperform);
                        $ecritureperform->setSolde(-$paie->getPerformance());
                        $ecritureperform->setMontant($paie->getPerformance());
                        $ecritureperform->setLibelle("prime de performance ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                        $entityManager->persist($debitperform);
                        $entityManager->persist($ecritureperform);
                    }
        
        
                  
        
                        //         $paie->getBrut();
                     // salaire brut
                    
        
                    // $ecritureperform = new Ecriture();
                    // $ecritureperform->setType('Banque');
                    // $ecritureperform->setComptecredit("661200");
                    // $ecritureperform->setLibellecomptecredit("prime de performance");
                    // $ecritureperform->setComptedebit($banque->getCompte());
                    // $ecritureperform->setLibellecomptedebit($banque->getNom());
                    // $ecritureperform->setDebit($debit);
                    // $ecritureperform->setSolde(-$paie->getPerformance());
                    // $ecritureperform->setMontant($paie->getPerformance());
                    // $ecritureperform->setLibelle("prime de performance ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                    // $entityManager->persist($debitperform);
                    // $entityManager->persist($ecritureperform);
                   
        
                  
        
                    /** irpp */
                   
                    
                    $debitirpp = new Debit();
                    $debitirpp->setCompte($banque->getCompte());
                    $debitirpp->setType('Banque');
                    $debitirpp->setSalaire($paieSalaire);
                    $debitirpp->setMontant($paie->getIrpp());
        
                    $ecritureirpp = new Ecriture();
                    $ecritureirpp->setType('Banque');
                    $ecritureirpp->setComptecredit("447210");
                    $ecritureirpp->setLibellecomptecredit("IRPP");
                    $ecritureirpp->setComptedebit($banque->getCompte());
                    $ecritureirpp->setLibellecomptedebit($banque->getNom());
                    $ecritureirpp->setDebit($debitirpp);
                    $ecritureirpp->setSolde(-$paie->getIrpp());
                    $ecritureirpp->setMontant($paie->getIrpp());
                    $ecritureirpp->setLibelle("IRPP ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                    $entityManager->persist($debitirpp);
                    $entityManager->persist($ecritureirpp);
        
                  //CA
                    ;
        
                    $debitca = new Debit();
                    $debitca->setCompte($banque->getCompte());
                    $debitca->setType('Banque');
                    $debitca->setSalaire($paieSalaire);
                    $debitca->setMontant($paie->getCa());
        
                    $ecritureca = new Ecriture();
                    $ecritureca->setType('Banque');
                    $ecritureca->setComptecredit("447220");
                    $ecritureca->setLibellecomptecredit("Centimes additionnels");
                    $ecritureca->setComptedebit($banque->getCompte());
                    $ecritureca->setLibellecomptedebit($banque->getNom());
                    $ecritureca->setDebit($debitca);
                    $ecritureca->setSolde(-$paie->getCa());
                    $ecritureca->setMontant($paie->getCa());
                    $ecritureca->setLibelle("Centimes additionnels ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                    $entityManager->persist($debitca);
                    $entityManager->persist($ecritureca);
                   
                    /** dve local */
                   
                    $debitlocal = new Debit();
                    $debitlocal->setCompte($banque->getCompte());
                    $debitlocal->setType('Banque');
                    $debitlocal->setSalaire($paieSalaire);
                    $debitlocal->setMontant($paie->getLocal());
        
                    $ecriturelocal = new Ecriture();
                    $ecriturelocal->setType('Banque');
                    $ecriturelocal->setComptecredit("447240");
                    $ecriturelocal->setLibellecomptecredit("Taxe de développement local");
                    $ecriturelocal->setComptedebit($banque->getCompte());
                    $ecriturelocal->setLibellecomptedebit($banque->getNom());
                    $ecriturelocal->setDebit($debitlocal);
                    $ecriturelocal->setSolde(-$paie->getLocal());
                    $ecriturelocal->setMontant($paie->getLocal());
                    $ecriturelocal->setLibelle("Taxe de développement local ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                    $entityManager->persist($debitlocal);
                    $entityManager->persist($ecriturelocal);
                   
                    /** vcnps viel */
                   
                    
        
                    $debitviel = new Debit();
                    $debitviel->setCompte($banque->getCompte());
                    $debitviel->setType('Banque');
                    $debitviel->setSalaire($paieSalaire);
                    $debitviel->setMontant($paie->getVieil());
        
                    $ecritureviel = new Ecriture();
                    $ecritureviel->setType('Banque');
                    $ecritureviel->setComptecredit("431300");
                    $ecritureviel->setLibellecomptecredit("CNPS / Pension Vieillesse");
                    $ecritureviel->setComptedebit($banque->getCompte());
                    $ecritureviel->setLibellecomptedebit($banque->getNom());
                    $ecritureviel->setDebit($debitviel);
                    $ecritureviel->setSolde(-$paie->getVieil());
                    $ecritureviel->setMontant($paie->getVieil());
                    $ecritureviel->setLibelle("CNPS / Pension Vieillesse ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                    $entityManager->persist($debitviel);
                    $entityManager->persist($ecritureviel);
                    
                    /** fonfoncier */
                   
                    
                    if($paie->getFoncier() != 0){
                        $debifoncier = new Debit();
                        $debifoncier->setCompte($banque->getCompte());
                        $debifoncier->setType('Banque');
                        $debifoncier->setSalaire($paieSalaire);
                        $debifoncier->setMontant($paie->getFoncier());
        
                        $ecriturfoncier = new Ecriture();
                        $ecriturfoncier->setType('Banque');
                        $ecriturfoncier->setComptecredit("431200");
                        $ecriturfoncier->setLibellecomptecredit("Credit foncier");
                        $ecriturfoncier->setComptedebit($banque->getCompte());
                        $ecriturfoncier->setLibellecomptedebit($banque->getNom());
                        $ecriturfoncier->setDebit($debifoncier);
                        $ecriturfoncier->setSolde(-$paie->getFoncier());
                        $ecriturfoncier->setMontant($paie->getFoncier());
                        $ecriturfoncier->setLibelle("Credit foncier ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                        $entityManager->persist($debifoncier);
                        $entityManager->persist($ecriturfoncier);
                    }
                    
                    /** crtv */
                   
                    
                    if($paie->getCrtv() != 0){
                        $debicrtv = new Debit();
                        $debicrtv->setCompte($banque->getCompte());
                        $debicrtv->setType('Banque');
                        $debicrtv->setSalaire($paieSalaire);
                        $debicrtv->setMontant($paie->getCrtv());
        
                        $ecriturcrtv = new Ecriture();
                        $ecriturcrtv->setType('Banque');
                        $ecriturcrtv->setComptecredit("447250");
                        $ecriturcrtv->setLibellecomptecredit("Redevance audio visuelle (CRTV)");
                        $ecriturcrtv->setComptedebit($banque->getCompte());
                        $ecriturcrtv->setLibellecomptedebit($banque->getNom());
                        $ecriturcrtv->setDebit($debicrtv);
                        $ecriturcrtv->setSolde(-$paie->getCrtv());
                        $ecriturcrtv->setMontant($paie->getCrtv());
                        $ecriturcrtv->setLibelle("Redevance audio visuelle (CRTV) ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                        $entityManager->persist($debicrtv);
                        $entityManager->persist($ecriturcrtv);
                    }
        
                    /** allocation */
                   
                    
                    if($paie->getAllocation() != 0){
                        $debiallocation = new Debit();
                        $debiallocation->setCompte($banque->getCompte());
                        $debiallocation->setType('Banque');
                        $debiallocation->setSalaire($paieSalaire);
                        $debiallocation->setMontant($paie->getAllocation());
        
                        $ecriturallocation = new Ecriture();
                        $ecriturallocation->setType('Banque');
                        $ecriturallocation->setComptecredit("431100");
                        $ecriturallocation->setLibellecomptecredit("ALLOC FAM");
                        $ecriturallocation->setComptedebit($banque->getCompte());
                        $ecriturallocation->setLibellecomptedebit($banque->getNom());
                        $ecriturallocation->setDebit($debiallocation);
                        $ecriturallocation->setSolde(-$paie->getAllocation());
                        $ecriturallocation->setMontant($paie->getAllocation());
                        $ecriturallocation->setLibelle("ALLOC FAM ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                        $entityManager->persist($debiallocation);
                        $entityManager->persist($ecriturallocation);
                    }
                    
                    /** cp vieil */
                   
                    
                    if($paie->getCpvieil() != 0){
                        $debiallocation = new Debit();
                        $debiallocation->setCompte($banque->getCompte());
                        $debiallocation->setType('Banque');
                        $debiallocation->setSalaire($paieSalaire);
                        $debiallocation->setMontant($paie->getCpvieil());
        
                        $ecriturallocation = new Ecriture();
                        $ecriturallocation->setType('Banque');
                        $ecriturallocation->setComptecredit("431300");
                        $ecriturallocation->setLibellecomptecredit("PENS VIEIL");
                        $ecriturallocation->setComptedebit($banque->getCompte());
                        $ecriturallocation->setLibellecomptedebit($banque->getNom());
                        $ecriturallocation->setDebit($debiallocation);
                        $ecriturallocation->setSolde(-$paie->getCpvieil());
                        $ecriturallocation->setMontant($paie->getCpvieil());
                        $ecriturallocation->setLibelle("PENS VIEIL ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                        $entityManager->persist($debiallocation);
                        $entityManager->persist($ecriturallocation);
                    }
        
                    /** trav */
                  
                    
                    if($paie->getTav() != 0){
                        $debitav = new Debit();
                        $debitav->setCompte($banque->getCompte());
                        $debitav->setType('Banque');
                        $debitav->setSalaire($paieSalaire);
                        $debitav->setMontant($paie->getTav());
        
                        $ecriturtav = new Ecriture();
                        $ecriturtav->setType('Banque');
                        $ecriturtav->setComptecredit("431200");
                        $ecriturtav->setLibellecomptecredit("ACC TRAV");
                        $ecriturtav->setComptedebit($banque->getCompte());
                        $ecriturtav->setLibellecomptedebit($banque->getNom());
                        $ecriturtav->setDebit($debitav);
                        $ecriturtav->setSolde(-$paie->getTav());
                        $ecriturtav->setMontant($paie->getTav());
                        $ecriturtav->setLibelle("ACC TRAV ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                        $entityManager->persist($debitav);
                        $entityManager->persist($ecriturtav);
                    }
        
                    /** cp foncier */
                   
                    
                    if($paie->getCpfoncier() != 0){
                        $debitav = new Debit();
                        $debitav->setCompte($banque->getCompte());
                        $debitav->setType('Banque');
                        $debitav->setSalaire($paieSalaire);
                        $debitav->setMontant($paie->getCpfoncier());
        
                        $ecriturtav = new Ecriture();
                        $ecriturtav->setType('Banque');
                        $ecriturtav->setComptecredit("431200");
                        $ecriturtav->setLibellecomptecredit("CREDIT FONC");
                        $ecriturtav->setComptedebit($banque->getCompte());
                        $ecriturtav->setLibellecomptedebit($banque->getNom());
                        $ecriturtav->setDebit($debitav);
                        $ecriturtav->setSolde(-$paie->getCpfoncier());
                        $ecriturtav->setMontant($paie->getCpfoncier());
                        $ecriturtav->setLibelle("CREDIT FONC ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                        $entityManager->persist($debitav);
                        $entityManager->persist($ecriturtav);
                    }
        
                    /** fne */
                   
                    
                    if($paie->getFne() != 0){
                        $debifne = new Debit();
                        $debifne->setCompte($banque->getCompte());
                        $debifne->setType('Banque');
                        $debifne->setSalaire($paieSalaire);
                        $debifne->setMontant($paie->getFne());
        
                        $ecriturfne = new Ecriture();
                        $ecriturfne->setType('Banque');
                        $ecriturfne->setComptecredit("431300");
                        $ecriturfne->setLibellecomptecredit("F.N.E");
                        $ecriturfne->setComptedebit($banque->getCompte());
                        $ecriturfne->setLibellecomptedebit($banque->getNom());
                        $ecriturfne->setDebit($debifne);
                        $ecriturfne->setSolde(-$paie->getFne());
                        $ecriturfne->setMontant($paie->getFne());
                        $ecriturfne->setLibelle("F.N.E ".$paie->getEmploye()->getNom(). " ".$paie->getEmploye()->getPrenom());
                        $entityManager->persist($debifne);
                        $entityManager->persist($ecriturfne);
                    }
        
                   
        
        
                  
                       
                        $paieSalaire->setUser($this->getUser());
                        $paieSalaire->setMontant($paie->getSalaireNet());
                        $paieSalaire->setEmploye($paie->getEmploye());
                        $paieSalaire->setCompte($banque->getCompte());
                        $entityManager->persist($paieSalaire);
                        $paie->setPayer(true);
                        $paie->setDatepaye(new \DateTime());
                        $entityManager->persist($paie);
        
                       $entityManager->flush();


                }
                $this->addFlash('notice', 'Paiements effectués avec succès');
            
//                    return $this->redirectToRoute('depense_index', [], Response::HTTP_SEE_OTHER);
            } else {
                $this->addFlash('danger', 'Montant non disponible');
            }




            $res['id'] = 'ok';


            $response = new Response();
            $response->headers->set('content-type', 'application/json');
            $re = json_encode($res);
            $response->setContent($re);
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

    #[Route("/Accompte", name :"accompte", methods : ["GET"]) ]
    public function accompte(AccompteRepository $repository): Response
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $accomptes = $repository->findBy(['verser' => false]);
            
            $response = $this->render('finance/accompte.html.twig', [
                'accomptes' => $accomptes,
                'banques' => $this->entityManager->getRepository(Banque::class)->findAll(),
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

    #[Route("/payeraccompte", name :"payeraccompte", methods : ["POST"]) ]
    public function payeraccompte(Solde $solde, Request $request): Response
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $debit = new Debit();
            $ecriture = new Ecriture();
            $entityManager = $this->entityManager;

            $banque = $entityManager->getRepository(Banque::class)->find($request->get('banque'));
            $accompte = $entityManager->getRepository(Accompte::class)->find($request->get('accompte'));
           

            $montant = $solde->montantbanque($entityManager, $banque->getCompte());

            if ($accompte->getMontant() <= $montant) {

            $depenseNet = new Depense();
            $depenseNet->setUser($this->getUser());
            $depenseNet->setType("Banque");
            $depenseNet->setLibelle("Accompte sur Salaire");
            $depenseNet->setMontant($accompte->getMontant());
            $depenseNet->setStatut("Effectuée");
            $depenseNet->setCompte("421100");

            $debit->setCompte($banque->getCompte());
            $debit->setType('Banque');
            $debit->setDepense($depenseNet);
            $debit->setMontant($accompte->getMontant());


            $ecriture->setType('Banque');
            $ecriture->setComptecredit("421100");
            $ecriture->setLibellecomptecredit("Personnel Avances");
            $ecriture->setComptedebit($banque->getCompte());
            $ecriture->setLibellecomptedebit($banque->getNom());
            $ecriture->setDebit($debit);
            $ecriture->setSolde(-$accompte->getMontant());
            $ecriture->setMontant($accompte->getMontant());
            $ecriture->setLibelle("Accompte sur salaire ".$accompte->getEmploye()->getNom(). " ".$accompte->getEmploye()->getPrenom());

            $accompte->setVerser(true);
            $entityManager->persist($accompte);

            $entityManager->persist($depenseNet);
            $entityManager->persist($debit);
            $entityManager->persist($ecriture);
            $entityManager->flush();
                $this->addFlash('notice', 'Paiement effectué avec succès');

//                    return $this->redirectToRoute('depense_index', [], Response::HTTP_SEE_OTHER);
                } else {
                    $this->addFlash('danger', 'Montant non disponible');
                }




            $res['id'] = 'ok';


            $response = new Response();
            $response->headers->set('content-type', 'application/json');
            $re = json_encode($res);
            $response->setContent($re);
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
    
    #[Route("/CompteResultat", name :"Compteresultat", methods : ["POST", "GET"]) ]
    public function CompteResultat(Solde $solde, Request $request, CommandeRepository $repository, CommandeProduitRepository $Produitrepository, ApprovisionnementRepository $Approrepository, PaieRepository $paieRepository): Response
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $commandes = $repository->findBy(['suivi' => true, 'payer' => true ]);// achat deja paye
            $vente = 0;
            $achat = 0;
            $reapprro = 0;
            $chargepersonnel= 0;
            $charge = 0;
            $approvisionnements = $Approrepository->findAll();

            // variation stock produit
            $variation = 0;
            $stocks = $this->entityManager->getRepository(Stock::class)->findAll();
            foreach($stocks as $stock){
                $variation += $stock->getQuantite() * $stock->getProduit()->getPght();
                //$approvs = $Approrepository->findBy(['produit' => $stock->getProduit()->getId()]);

            }

            foreach($approvisionnements as $approvisionnement){
              // achat  
               // $reapprro = $reapprro + $approvisionnement->getQuantite() * $approvisionnement->getPght();
                $achat = $achat  + $approvisionnement->getQuantite() * $approvisionnement->getPght();
                
            }

            

            foreach($commandes as $commande){
                if($commande->getLivraison() == true){
                $vente = $vente + $commande->getMontant();
                }else{// commande non livrer
                    $commandeproduits = $repository->findBy(['commande' => $commande->getId()]);
                    foreach($commandeproduits as $commandeproduit){
                        $stoc = $this->entityManager->getRepository(Stock::class)->find($commandeproduit->getProduit());
                        if(!empty($stoc)){
                            $quant = $stoc->getQuantite() - $commandeproduit->getQuantite();
                            if($quant < 0){
                                $charge += -1 * $commandeproduit->getPght() * $quant;// -1 * la quatite 
                            }
                        }else{
                            $charge += $commandeproduit->getQuantite() * $commandeproduit->getPght();
                        }
                    }
                    
                }
            }
            

            $restes = $this->entityManager->getRepository(LivrerReste::class)->findAll();
            foreach($restes as $reste){    
                $stoc = $this->entityManager->getRepository(Stock::class)->find($reste->getProduit());
                if(!empty($stoc)){
                    $quant = $stoc->getQuantite() - ($reste->getQuantite() - $reste->getQuantitelivre());
                    if($quant < 0){
                        $charge += -1 * $$reste->getProduit()->getPght() * $quant;// -1 * la quatite 
                    }
                }else{
                    $charge += ($reste->getQuantite() - $reste->getQuantitelivre()) * $reste->getProduit()->getPght();
                }    
            }
            
            $avoirs = $this->entityManager->getRepository(Avoir::class)->findAll();
            foreach($avoirs as $avoir){    
                $charge += $avoir->getMontant(); 
            }

            // $credits = $repository->findBy(['paiement' => null, 'credit' => true, 'suivi' => true, 'payer' => false]);// achat a credit
            // foreach($credits as $commande){
            //     $vente = $vente + $commande->getMontant();
            //     $commandesproduits = $Produitrepository->findBy(['commande' => $commande->getid()]);
            //     foreach($commandesproduits as $commandeproduit){
            //         $achat = $achat + $commandeproduit->getQuantite() * $commandeproduit->getPght();
            //     }
            // }


            //charge personnel
            $salaires = $paieRepository->compteResultat(date('Y'));
            foreach($salaires as $salaire){
                $chargepersonnel = $chargepersonnel + $salaire->getSalaireNet() + $salaire->getTotalchargepatronal() + $salaire->getTotalChargeEmploye();

                
            }

            // interet pret bancaire
            $interet = 0;
             $prets = $this->entityManager->getRepository(Financement::class)->findBy(['rembourser' => false, 'apport' => false]);
             foreach($prets as $pret){
                

                $interet = $interet + ((($pret->getMontant() * $pret->getTaux()/100) / $pret->getDuree()) * count($pret->getRemboursements()));    
            }
            
            // amortissement
            $amortissement = 0;
             $amortis = $this->entityManager->getRepository(Categorie::class)->amortissement();
             foreach($amortis as $amorti){
                $depenses = $this->entityManager->getRepository(Depense::class)->findBy(['categorie' => $amorti->getId()]);
                foreach($depenses as $depense){

                    $amortissement = $amortissement + ($depense->getMontant() / ( $amorti->getAmortissement() * 12)) ;    
                }
            }

            $depenses = $this->entityManager->getRepository(Depense::class)->compteResultat(date('Y'));
             foreach($depenses as $depense){
                if($depense->getCategorie()->getAmortissement() == null){

                    $charge += $depense->getMontant(); 
                } 
            }

            $response = $this->render('finance/resultat.html.twig',[
                'vente' => $vente,
                'achat' => $achat,
                'chargepersonnel' => $chargepersonnel,
                'interet' => $interet,
                'amortissement' => $amortissement,
                'variation' => $variation,
                'charge' => $charge,
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

    #[Route("/Bilan", name :"bilan", methods : ["POST", "GET"]) ]
    public function bilan(Solde $solde, Request $request, EcritureRepository $repository): Response
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            
            $ecritures = $repository->findAll();
            $caisse = 0;
            $banque = 0;
            $debitbanque = 0;
            $debitcaisse = 0;
            foreach ($ecritures as $ecriture) {
                $credit = null;
                $debit = null;
                if ($ecriture->getCredit() != null) {
                    $credit = $ecriture->getCredit();
                    $credit->getType() == 'Espece' ?
                        $caisse = $caisse + $credit->getMontant() :
                        $banque = $banque + $credit->getMontant();
                } else {

                    $debit = $ecriture->getDebit();
                    $debit->getType() == 'Espece' ?
                        $debitcaisse = $debitcaisse + $debit->getMontant() :
                        $debitbanque = $debitbanque + $debit->getMontant();

                }

            }

            $stockfinal = 0;
            $stocks = $this->entityManager->getRepository(Stock::class)->findAll();
            foreach($stocks as $stock){
                $stockfinal += $stock->getQuantite() * $stock->getProduit()->getPght();
                //$approvs = $Approrepository->findBy(['produit' => $stock->getProduit()->getId()]);

            }

           $solde = ($caisse - $debitcaisse) + ($banque - $debitbanque);
            // amortissement
            $amortissement = [];
            $amortissement['amorti'] = 0;
            $amortissement['montant'] = 0;
             $amortis = $this->entityManager->getRepository(Categorie::class)->amortissement();
             foreach($amortis as $amorti){
                $depenses = $this->entityManager->getRepository(Depense::class)->findBy(['categorie' => $amorti->getId()]);
                foreach($depenses as $depense){

                    $amortissement['amorti'] = $amortissement['amorti'] + ($depense->getMontant() / ( $amorti->getAmortissement() * 12)) ;    
                    $amortissement['montant'] = $amortissement['montant'] + $depense->getMontant();    
                }
            }

            $detteavoir = 0;
            $avoirs = $this->entityManager->getRepository(Avoir::class)->findAll();
            foreach($avoirs as $avoir){    
                $detteavoir += $avoir->getMontant(); 
            }

            // capital
            $capital = 0;
             $prets = $this->entityManager->getRepository(Financement::class)->findBy(['apport' => true]);
             foreach($prets as $pret){
                

                $capital = $capital + $pret->getMontant() ;    
            }
            
             // interet pret bancaire
             $montantpret = 0;
             $remboursement = 0;
             $prets = $this->entityManager->getRepository(Financement::class)->findBy(['rembourser' => false, 'apport' => false]);
             foreach($prets as $pret){
                $montantpret += $pret->getMontant();
                if($pret->getRemboursements() != null){
                    foreach ($pret->getRemboursements() as $rembours) {
                        $remboursement = $remboursement + $rembours->getMontant();
                        }
                }   
            }

            // avance client
            $avanceclient = 0;
            $commandes = $this->entityManager->getRepository(Commande::class)->findBy(['suivi' => true, 'payer' => true, 'livraison' => false ]);// achat deja paye
            foreach($commandes as $commande){
               
                    $commandeproduits = $repository->findBy(['commande' => $commande->getId()]);
                    foreach($commandeproduits as $commandeproduit){
                        $stoc = $this->entityManager->getRepository(Stock::class)->find($commandeproduit->getProduit());
                        if(!empty($stoc)){
                            $quant = $stoc->getQuantite() - $commandeproduit->getQuantite();
                            if($quant < 0){
                                $avanceclient += -1 * $commandeproduit->getPght() * $quant;// -1 * la quatite 
                            }
                        }else{
                            $avanceclient += $commandeproduit->getQuantite() * $commandeproduit->getPght();
                        }
                    }
                    
                
            }
            

            $restes = $this->entityManager->getRepository(LivrerReste::class)->findAll();
            foreach($restes as $reste){    
                $stoc = $this->entityManager->getRepository(Stock::class)->find($reste->getProduit());
                if(!empty($stoc)){
                    $quant = $stoc->getQuantite() - ($reste->getQuantite() - $reste->getQuantitelivre());
                    if($quant < 0){
                        $avanceclient += -1 * $$reste->getProduit()->getPght() * $quant;// -1 * la quatite 
                    }
                }else{
                    $avanceclient += ($reste->getQuantite() - $reste->getQuantitelivre()) * $reste->getProduit()->getPght();
                }    
            }
            // fin avance client

            // dtte fournisseur
            $dettefournisseur = 0;
            $factures = $this->entityManager->getRepository(Facture::class)->findBy(['payer' => false]);
            foreach($factures as $facture){    
               
                    $dettefournisseur += $facture->getMontant();
                   
            }
           

            $response = $this->render('finance/bilan.html.twig',[
               
                'amortissement' => $amortissement,
                'detteavoir' => $detteavoir,
                'solde' => $solde,
                'stock' => $stockfinal,
                'capital' => $capital,
                'pret' => $montantpret - $remboursement,
                'avanceclient' => $avanceclient,
                'dettefournisseur' => $dettefournisseur,
                'resultat' => $this->ResultatInterne(),
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

    public function ResultatInterne()
    {
        
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $commandes = $this->entityManager->getRepository(Commande::class)->findBy(['suivi' => true, 'payer' => true ]);// achat deja paye
            $vente = 0;
            $achat = 0;
            $reapprro = 0;
            $chargepersonnel= 0;
            $charge = 0;
            $approvisionnements = $this->entityManager->getRepository(Approvisionnement::class)->findAll();

            // variation stock produit
            $variation = 0;
            $stocks = $this->entityManager->getRepository(Stock::class)->findAll();
            foreach($stocks as $stock){
                $variation += $stock->getQuantite() * $stock->getProduit()->getPght();
                //$approvs = $Approrepository->findBy(['produit' => $stock->getProduit()->getId()]);

            }

            foreach($approvisionnements as $approvisionnement){
              // achat  
               // $reapprro = $reapprro + $approvisionnement->getQuantite() * $approvisionnement->getPght();
                $achat = $achat  + $approvisionnement->getQuantite() * $approvisionnement->getPght();
                
            }

            

            foreach($commandes as $commande){
                if($commande->getLivraison() == true){
                $vente = $vente + $commande->getMontant();
                }else{// commande non livrer
                    $commandeproduits = $this->entityManager->getRepository(Commande::class)->findBy(['commande' => $commande->getId()]);
                    foreach($commandeproduits as $commandeproduit){
                        $stoc = $this->entityManager->getRepository(Stock::class)->find($commandeproduit->getProduit());
                        if(!empty($stoc)){
                            $quant = $stoc->getQuantite() - $commandeproduit->getQuantite();
                            if($quant < 0){
                                $charge += -1 * $commandeproduit->getPght() * $quant;// -1 * la quatite 
                            }
                        }else{
                            $charge += $commandeproduit->getQuantite() * $commandeproduit->getPght();
                        }
                    }
                    
                }
            }
            

            $restes = $this->entityManager->getRepository(LivrerReste::class)->findAll();
            foreach($restes as $reste){    
                $stoc = $this->entityManager->getRepository(Stock::class)->find($reste->getProduit());
                if(!empty($stoc)){
                    $quant = $stoc->getQuantite() - ($reste->getQuantite() - $reste->getQuantitelivre());
                    if($quant < 0){
                        $charge += -1 * $$reste->getProduit()->getPght() * $quant;// -1 * la quatite 
                    }
                }else{
                    $charge += ($reste->getQuantite() - $reste->getQuantitelivre()) * $reste->getProduit()->getPght();
                }    
            }
            
            $avoirs = $this->entityManager->getRepository(Avoir::class)->findAll();
            foreach($avoirs as $avoir){    
                $charge += $avoir->getMontant(); 
            }

            // $credits = $repository->findBy(['paiement' => null, 'credit' => true, 'suivi' => true, 'payer' => false]);// achat a credit
            // foreach($credits as $commande){
            //     $vente = $vente + $commande->getMontant();
            //     $commandesproduits = $Produitrepository->findBy(['commande' => $commande->getid()]);
            //     foreach($commandesproduits as $commandeproduit){
            //         $achat = $achat + $commandeproduit->getQuantite() * $commandeproduit->getPght();
            //     }
            // }


            //charge personnel
            $salaires = $this->entityManager->getRepository(Paie::class)->compteResultat(date('Y'));
            foreach($salaires as $salaire){
                $chargepersonnel = $chargepersonnel + $salaire->getSalaireNet() + $salaire->getTotalchargepatronal() + $salaire->getTotalChargeEmploye();

                
            }

            // interet pret bancaire
            $interet = 0;
             $prets = $this->entityManager->getRepository(Financement::class)->findBy(['rembourser' => false, 'apport' => false]);
             foreach($prets as $pret){
                

                $interet = $interet + ((($pret->getMontant() * $pret->getTaux()/100) / $pret->getDuree()) * count($pret->getRemboursements()));    
            }
            
            // amortissement
            $amortissement = 0;
             $amortis = $this->entityManager->getRepository(Categorie::class)->amortissement();
             foreach($amortis as $amorti){
                $depenses = $this->entityManager->getRepository(Depense::class)->findBy(['categorie' => $amorti->getId()]);
                foreach($depenses as $depense){

                    $amortissement = $amortissement + ($depense->getMontant() / ( $amorti->getAmortissement() * 12)) ;    
                }
            }

            $depenses = $this->entityManager->getRepository(Depense::class)->compteResultat(date('Y'));
             foreach($depenses as $depense){
                if($depense->getCategorie()->getAmortissement() == null){

                    $charge += $depense->getMontant(); 
                } 
            }

            $xa = $vente - ($achat - $variation);
            $tb = 0;
            $tc = 0;
            $td = 0;
            $xb = $vente + $tb + $tc + $td;
            $te = 0;
            $tf = 0;
            $tg = 0;
            $th = 0;
            $ti = 0;

            $rc = 0;
            $rd = 0;
            $re = 0;
            $rf = 0;
            $rg = 0;
            $rh = 0;
            $ri = 0;
            $rj = 0;
            $xc = $xa + ($tb + $tc + $td)+ ($te + $tf + $tg + $th + $ti) - ($rc + $rd + $re + $rf + $rg + $rh + $ri + $rj );
            $xd = $xc - $chargepersonnel;
            $tj = 0;
            $rl = 0;
            $xe = $xd + $tj + $rl;
            $tk = 0;
            $tl = 0;
            $tm = 0;
            $rm = $interet + $charge;
            $xf = $tk + $tl + $tm - ($rm + $amortissement);
            $xg = $xe + $xf;
            $tn = 0;
            $to = 0;
            $ro = 0;
            $rp = 0;
            $rq = 0;
            $rs = 0;
            $xh = ( $tn + $to ) - ( $ro + $rp);
            $xi = $xg + $xh - $rq - $rs;
            return $xi;
        } 
    }


}
