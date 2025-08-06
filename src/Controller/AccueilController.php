<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


final class AccueilController extends AbstractController
{
    #[Route('/', name: 'accueil', methods: ['GET'])]
    public function index(): Response
    {
        return $this->redirectToRoute('vente_new');
    }
    
    #[Route('/Testmenu', name: 'accueil', methods: ['GET'])]
    public function test(): Response
    {
        return $this->render('test/test.html.twig');
    }
}