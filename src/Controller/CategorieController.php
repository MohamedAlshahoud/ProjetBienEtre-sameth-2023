<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\CodePostal;
use App\Entity\Prestataire;
use App\Form\SearchType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{

    //afficher une categorie par ID 

    /**
    * @Route("/categorie/{id}", name="afficher_categorie")
    */
    public function show(Categorie $categorie, PaginatorInterface $paginator, Request $request) : Response
    {
 
      $prestataires = $categorie ->getPrestataires();
      $form = $this->createForm(SearchType::class);
  
      $prestataires = $paginator->paginate(
          $prestataires, /* query NOT result */
          $request->query->getInt('page', 1),
          2
      );  

      return $this->render('categorie/showListePrestataire.html.twig', [
       'prestataires' => $prestataires,
       'search' => $form->createView()
       ]);
    }


    #[Route('/catgeorie', name: 'categorie')]
    public function index(EntityManagerInterface $entityManager, Request $request): Response
    {
        $categories = $entityManager->getRepository(Categorie::class)->findAll();
        $prestataires = $entityManager->getRepository(Prestataire::class)->findBy([],['id' => 'DESC'],4);
        $form = $this->createForm(SearchType::class, null);
        $form->handleRequest($request);


        if ($request->isMethod('post')) {
            if($form->isSubmitted() && $form->isValid()){
                $data = $form->getData();

                if ($data["prestataire"] != null) {
                    $nom = $data["prestataire"];
                } else {
                    $nom = "all";
                }
                if ($data["categorie"] != null) {
                    $categorie = $data["categorie"]->getId();
                } else {
                    $categorie = "all";
                }
                if ($data["codePostal"] != null) {
                    $code_postal = $data["codePostal"]->getId();
                } else {
                    $code_postal = "all";
                }

                if ($data["localite"] != null) {
                    $localite = $data["localite"]->getId();
                } else {
                    $localite = "all";
                }

                if ($data["commune"] != null) {
                    $commune = $data["commune"]->getId();
                } else {
                    $commune = "all";
                }

                return $this->redirect($this->generateUrl('app_search_result', array('nom' => $nom, 'categorie' => $categorie, 'code_postal' => $code_postal, 'localite' => $localite, 'commune' => $commune)));
            }
        }

        return $this->render('categorie/index.html.twig', [
            'search' => $form->createView(),
            'prestataires' => $prestataires,
            'categories' => $categories,
        ]);
    }
}
