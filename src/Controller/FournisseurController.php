<?php

namespace App\Controller;

use App\Entity\Fournisseur;
use App\Entity\Produit;
use App\Entity\FournisseurProduit;
use App\Form\FournisseurType;
use App\Repository\FournisseurRepository;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

#[Route("{_locale}/fournisseur") ]
class FournisseurController extends AbstractController
{
       public function __construct(private Security $security, private EntityManagerInterface $entityManager)
    {
    }

    #[Route("/", name :"fournisseur_index", methods : ["GET"]) ]
    public function index(FournisseurRepository $fournisseurRepository): Response
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            return $this->render('fournisseur/index.html.twig', [
                'fournisseurs' => $fournisseurRepository->findAll(),
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

    #[Route("/new", name :"fournisseur_new", methods : ["GET","POST"]) ]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $fournisseur = new Fournisseur();
            $form = $this->createForm(FournisseurType::class, $fournisseur);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $entityManager->persist($fournisseur);
                $entityManager->flush();

                $compte = '401' . str_pad($fournisseur->getId(), 4, '0', STR_PAD_LEFT);
                $fournisseur->setCompte($compte);
                $entityManager->persist($fournisseur);
                $entityManager->flush();

                return $this->redirectToRoute('fournisseur_index', [], Response::HTTP_SEE_OTHER);
            }

            return $this->render('fournisseur/new.html.twig', [
                'fournisseur' => $fournisseur,
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

    #[Route("/{id}", name :"fournisseur_show", methods : ["GET"], requirements:  ['id' => '\d+']) ]
    public function show(Fournisseur $fournisseur): Response
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            return $this->render('fournisseur/show.html.twig', [
                'fournisseur' => $fournisseur,
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

    #[Route("/Produits/{id}", name :"fournisseur_produit", methods : ["GET"]) ]
    public function produit(Fournisseur $fournisseur, ProduitRepository $repository): Response
    {/*  selection produits a affecter a un fournisseur*/
        if ($this->security->isGranted('ROLE_FINANCE')) {
            return $this->render('fournisseur/produit.html.twig', [
                'fournisseur' => $fournisseur,
                'produits' => $repository->nonAssocier($fournisseur),
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

    #[Route("/Affecter", name :"fournisseur_affecter", methods : [ "POST"]) ]
    public function affecter(Request $request, EntityManagerInterface $entityManager)
    {/** affectation de produits */
		if ($this->security->isGranted('ROLE_FINANCE')) 
		{
				if($request->get('produit'))
				{
					$produit = explode(";",$request->get('produit'));
					$produits = $entityManager->getrepository(Produit::class)->fournisseur( $produit);
					$fournisseur = $entityManager->getrepository(Fournisseur::class)->find($request->get('id'));
                    foreach($produits as  $prod){
                        $prod->addFournisseur($fournisseur);
                        $entityManager->persist($prod);
                    }
                    $entityManager->flush();
					$this->addFlash('notice', 'Produits effectués');
                    $url = $this->generateUrl('fournisseur_show', ['id' => $request->get('id')], UrlGeneratorInterface::ABSOLUTE_URL);
					$res['id']= $url;
					
					$response = new Response();
					$response->headers->set('content-type','application/json');
					$re = json_encode($res);
					$response->setContent($re);
					return $response;
				}
			
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

    #[Route("/{id}/edit", name :"fournisseur_edit", methods : ["GET","POST"]) ]
    public function edit(Request $request, Fournisseur $fournisseur): Response
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            $form = $this->createForm(FournisseurType::class, $fournisseur);
            $form->remove('compte');
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $this->entityManager->flush();

                return $this->redirectToRoute('fournisseur_index', [], Response::HTTP_SEE_OTHER);
            }

            return $this->render('fournisseur/edit.html.twig', [
                'fournisseur' => $fournisseur,
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

    #[Route("/{id}", name :"fournisseur_delete", methods : ["POST"]) ]
    public function delete(Request $request, Fournisseur $fournisseur): Response
    {
        if ($this->security->isGranted('ROLE_FINANCE')) {
            try{
            if ($this->isCsrfTokenValid('delete' . $fournisseur->getId(), $request->request->get('_token'))) {
                $entityManager = $this->entityManager;
                $entityManager->remove($fournisseur);
                $entityManager->flush();
            }
        }catch(Throwable $e){
            $this->addFlash('notice', 'Suppression impossilble pour des raison d\'archivage');

        }

            return $this->redirectToRoute('fournisseur_index', [], Response::HTTP_SEE_OTHER);
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
