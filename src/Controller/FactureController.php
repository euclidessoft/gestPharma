<?php

namespace App\Controller;

use App\Entity\Facture;
use App\Entity\Mutuel;
use App\Repository\MutuelRepository;
use App\Repository\VenteRepository;
use App\Form\FactureForm;
use App\Repository\FactureRepository;
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
                foreach($ventes as $vente){
                    $facture->addVente($vente);
                    $montant += $vente->getCouverture();

                }
                $facture->setMontant($montant);
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
    public function detail(Mutuel $mutuel, Facture $facture, VenteRepository $repository, FactureRepository $repo): Response
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
}
