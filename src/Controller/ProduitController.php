<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\SecurityBundle\Security;
use Doctrine\ORM\EntityManagerInterface;

#[Route("/produit")]
class ProduitController extends 
 AbstractController
{   public function __construct(private Security $security, private EntityManagerInterface $entityManager)
    {
    }
    #[Route("/", name:"produit_index", methods:["GET"])]
    public function index(ProduitRepository $produitRepository): Response
    {
        if ($this->security->isGranted('ROLE_USER')) {
       
        $response = $this->render('produit/index.html.twig', [
            'produits' => $produitRepository->findAll(),
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

    #[Route("/new", name:"produit_new", methods:["GET","POST"])]
    public function new(Request $request): Response
    {
        if ($this->security->isGranted('ROLE_USER')) {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->entityManager;
            $entityManager->persist($produit);
            $entityManager->flush();

             $response = $this->redirectToRoute('produit_index', [], Response::HTTP_SEE_OTHER);
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

        $response = $this->render('produit/new.html.twig', [
            'produit' => $produit,
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

    #[Route("/{id}", name:"produit_show", methods:["GET"])]
    public function show(Produit $produit): Response
    {
        if ($this->security->isGranted('ROLE_USER')) {
       
        $response = $this->render('produit/show.html.twig', [
            'produit' => $produit,
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

    #[Route("/{id}/edit", name:"produit_edit", methods:["GET","POST"])]
    public function edit(Request $request, Produit $produit): Response
    {
        if ($this->security->isGranted('ROLE_USER')) {
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $response = $this->redirectToRoute('produit_index', [], Response::HTTP_SEE_OTHER);
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

        $response = $this->render('produit/edit.html.twig', [
            'produit' => $produit,
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

    #[Route("/{id}", name:"produit_delete", methods:["POST"])]
    public function delete(Request $request, Produit $produit): Response
    {
        if ($this->security->isGranted('ROLE_USER')) {
        if ($this->isCsrfTokenValid('delete'.$produit->getId(), $request->request->get('_token'))) {
            $entityManager = $this->entityManager;
            $entityManager->remove($produit);
            $entityManager->flush();
        }

        $response = $this->redirectToRoute('produit_index', [], Response::HTTP_SEE_OTHER);
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
