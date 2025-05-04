<?php

namespace App\Controller;

use App\Entity\Prime;
use App\Form\PrimeType;
use App\Repository\PrimeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/{_locale}/Prime") ]
class PrimeController extends AbstractController
{
    public function __construct(private Security $security, private EntityManagerInterface $entityManager)
    {
    }

    #[Route("/", name :"prime_index", methods : ["GET"]) ]
    public function index(PrimeRepository $primeRepository): Response
    {
        if ($this->security->isGranted('ROLE_RH')) {
            return $this->render('prime/admin/index.html.twig', [
                'primes' => $primeRepository->findAll(),
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

    #[Route("/Suivi", name :"prime_suivi", methods : ["GET"]) ]
    public function suivi(Security $security): Response
    {
        if ($this->security->isGranted('ROLE_EMPLOYER')) {
            $entityManager = $this->entityManager;
            $employe = $security->getUser();
            $primes = $entityManager->getRepository(Prime::class)->findBy(['employe' => $employe]);
            return $this->render('prime/index.html.twig', [
                'primes' => $primes,
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

    #[Route("/new", name :"prime_new", methods : ["GET","POST"]) ]
    public function new(Request $request): Response
    {
        if ($this->security->isGranted('ROLE_RH')) {
            $prime = new Prime();
            $form = $this->createForm(PrimeType::class, $prime);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->entityManager;
                $prime->setCreatedAt(new  \DateTime());
                $entityManager->persist($prime);
                $entityManager->flush();

                return $this->redirectToRoute('prime_index', [], Response::HTTP_SEE_OTHER);
            }

            return $this->render('prime/admin/new.html.twig', [
                'prime' => $prime,
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

    #[Route("/{id}", name :"prime_show", methods : ["GET"]) ]
    public function show(Prime $prime): Response
    {
        if ($this->security->isGranted('ROLE_RH')) {
            return $this->render('prime/admin/show.html.twig', [
                'prime' => $prime,
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

    #[Route("/{id}/edit", name :"prime_edit", methods : ["GET","POST"]) ]
    public function edit(Request $request, Prime $prime): Response
    {
        if ($this->security->isGranted('ROLE_RH')) {
            $form = $this->createForm(PrimeType::class, $prime);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $this->entityManager->flush();

                return $this->redirectToRoute('prime_index', [], Response::HTTP_SEE_OTHER);
            }

            return $this->render('prime/admin/edit.html.twig', [
                'prime' => $prime,
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

    #[Route("/{id}", name :"prime_delete", methods : ["POST"]) ]
    public function delete(Request $request, Prime $prime): Response
    {
        if ($this->security->isGranted('ROLE_RH')) {
            if ($this->isCsrfTokenValid('delete' . $prime->getId(), $request->request->get('_token'))) {
                $entityManager = $this->entityManager;
                $entityManager->remove($prime);
                $entityManager->flush();
            }

            return $this->redirectToRoute('prime_index', [], Response::HTTP_SEE_OTHER);
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
