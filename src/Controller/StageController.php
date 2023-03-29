<?php

namespace App\Controller;

use App\Entity\Prestataire;
use App\Entity\Stage;
use App\Entity\Utilisateur;
use App\Form\SearchType;
use App\Form\StageFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StageController extends AbstractController
{
    #[Route('/addstage', name: 'add_stage')]
    public function index( Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        $stage_form = $this->createForm(StageFormType::class);
        $stage_form->handleRequest($request);
        $form = $this->createForm(SearchType::class, null);
        $form->handleRequest($request);

        if ($user instanceof Utilisateur) {
            $prestatire_id = $user->getPrestataire()->getId();
        }

            $prestataire = $entityManager->getRepository(Prestataire::class)->find($prestatire_id);
            
        if ($request->isMethod('post')) {
            if($stage_form->isSubmitted() && $stage_form->isValid()){
               
                $stage = $stage_form->getData();
                if ($stage instanceof Stage) {
                    $stage->setPrestataire($prestataire);
                }
                  
                $entityManager->persist($stage);
                $entityManager->flush();

                return $this->redirect("/");
                
            }
        }

        return $this->render('stage/index.html.twig', [
            'controller_name' => 'Ajouter une stage',
            'form' => $stage_form,
            'search' => $form->createView()
        ]);
    }

    //afficher des stages
    #[Route('/stages', name: 'stages')]
    public function getAllStages(EntityManagerInterface $entityManager)
    {

        $stages = $entityManager->getRepository(Stage::class)->findAll();
        $form = $this->createForm(SearchType::class, null);
    
        return $this->render('prestataire/show.html.twig', [
            'stages' => $stages,
            'search' => $form->createView()
        ]);
    }

    //afficher un stage

    /**
    * @Route("/stage/{id}", name="afficher_stage")
    */
    public function showById(Stage $stage) : Response
    {

        $form = $this->createForm(SearchType::class);

      return $this->render('stage/show.html.twig', [
       'stage' => $stage,
       'search' => $form->createView()
       ]);
    }
}
