<?php

namespace App\Controller;

use App\Entity\Mutuel;
use App\Form\MutuelType;
use App\Repository\MutuelRepository;
use App\Repository\VenteRepository;
use App\Repository\FactureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\SecurityBundle\Security;
use Doctrine\ORM\EntityManagerInterface;

#[Route("/mutuel")]
class MutuelController extends 
 AbstractController
{   public function __construct(private Security $security, private EntityManagerInterface $entityManager)
    {
    }
    #[Route("/", name:"mutuel_index", methods:["GET"])]
    public function index(MutuelRepository $mutuelRepository): Response
    {
        if ($this->security->isGranted('ROLE_USER')) {
       
        $response = $this->render('mutuel/index.html.twig', [
            'mutuels' => $mutuelRepository->findAll(),
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

    #[Route("/new", name:"mutuel_new", methods:["GET","POST"])]
    public function new(Request $request): Response
    {
        if ($this->security->isGranted('ROLE_USER')) {
        $mutuel = new Mutuel();
        $form = $this->createForm(MutuelType::class, $mutuel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->entityManager;
            $entityManager->persist($mutuel);
            $entityManager->flush();

          
            $response = $this->redirectToRoute('mutuel_index', [], Response::HTTP_SEE_OTHER);
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

        $response = $this->render('mutuel/new.html.twig', [
            'mutuel' => $mutuel,
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

    #[Route("/{id}", name:"mutuel_show", methods:["GET"])]
    public function show(Mutuel $mutuel, VenteRepository $repository, FactureRepository $facturerepository): Response
    {
        if ($this->security->isGranted('ROLE_USER')) {
       
        $response = $this->render('mutuel/show.html.twig', [
            'mutuel' => $mutuel,
            'factures' => $facturerepository->findBy(['payer' => false, 'mutuel' => $mutuel]),
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

    #[Route("/NoPayer/{id}", name:"mutuel_payer", methods:["GET"])]
    public function faturepayer(Mutuel $mutuel, VenteRepository $repository, FactureRepository $facturerepository): Response
    {
        if ($this->security->isGranted('ROLE_USER')) {
       
        $response = $this->render('mutuel/facturepayer.html.twig', [
            'mutuel' => $mutuel,
            'factures' => $facturerepository->findBy(['payer' => true, 'mutuel' => $mutuel]),
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


    #[Route("/Vente/{id}", name:"mutuel_vente", methods:["GET"])]
    public function vente(Mutuel $mutuel, VenteRepository $repository, FactureRepository $facturerepository): Response
    {
        if ($this->security->isGranted('ROLE_USER')) {
       
        $response = $this->render('mutuel/vente.html.twig', [
            'mutuel' => $mutuel,
            'ventes' => $repository->factureMois($mutuel->getId()),
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

    #[Route("/{id}/edit", name:"mutuel_edit", methods:["GET","POST"])]
    public function edit(Request $request, Mutuel $mutuel): Response
    {
        if ($this->security->isGranted('ROLE_USER')) {
        $form = $this->createForm(MutuelType::class, $mutuel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();


            $response = $this->redirectToRoute('mutuel_index', [], Response::HTTP_SEE_OTHER);
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

        $response = $this->render('mutuel/edit.html.twig', [
            'mutuel' => $mutuel,
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

    #[Route("/{id}", name:"mutuel_delete", methods:["POST"])]
    public function delete(Request $request, Mutuel $mutuel): Response
    {
        if ($this->security->isGranted('ROLE_USER')) {
        if ($this->isCsrfTokenValid('delete'.$mutuel->getId(), $request->request->get('_token'))) {
            $entityManager = $this->entityManager;
            $entityManager->remove($mutuel);
            $entityManager->flush();
        }

         $response = $this->redirectToRoute('mutuel_index', [], Response::HTTP_SEE_OTHER);
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
}
