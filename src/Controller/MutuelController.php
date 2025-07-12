<?php

namespace App\Controller;

use App\Entity\Mutuel;
use App\Form\MutuelType;
use App\Repository\MutuelRepository;
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
        return $this->render('mutuel/index.html.twig', [
            'mutuels' => $mutuelRepository->findAll(),
        ]);
    }

    #[Route("/new", name:"mutuel_new", methods:["GET","POST"])]
    public function new(Request $request): Response
    {
        $mutuel = new Mutuel();
        $form = $this->createForm(MutuelType::class, $mutuel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->entityManager;
            $entityManager->persist($mutuel);
            $entityManager->flush();

            return $this->redirectToRoute('mutuel_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('mutuel/new.html.twig', [
            'mutuel' => $mutuel,
            'form' => $form->createView(),
        ]);
    }

    #[Route("/{id}", name:"mutuel_show", methods:["GET"])]
    public function show(Mutuel $mutuel): Response
    {
        return $this->render('mutuel/show.html.twig', [
            'mutuel' => $mutuel,
        ]);
    }

    #[Route("/{id}/edit", name:"mutuel_edit", methods:["GET","POST"])]
    public function edit(Request $request, Mutuel $mutuel): Response
    {
        $form = $this->createForm(MutuelType::class, $mutuel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            return $this->redirectToRoute('mutuel_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('mutuel/edit.html.twig', [
            'mutuel' => $mutuel,
            'form' => $form->createView(),
        ]);
    }

    #[Route("/{id}", name:"mutuel_delete", methods:["POST"])]
    public function delete(Request $request, Mutuel $mutuel): Response
    {
        if ($this->isCsrfTokenValid('delete'.$mutuel->getId(), $request->request->get('_token'))) {
            $entityManager = $this->entityManager;
            $entityManager->remove($mutuel);
            $entityManager->flush();
        }

        return $this->redirectToRoute('mutuel_index', [], Response::HTTP_SEE_OTHER);
    }
}
