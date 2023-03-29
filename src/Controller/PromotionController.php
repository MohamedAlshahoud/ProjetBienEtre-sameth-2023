<?php

namespace App\Controller;

use App\Entity\Prestataire;
use App\Entity\Promotion;
use App\Entity\Utilisateur;
use App\Form\SearchType;
use App\Form\PromotionType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PromotionController extends AbstractController
{
    #[Route('/addpromotion', name: 'add_promotion')]
    public function index( Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        $promotion_form = $this->createForm(PromotionType::class);
        $promotion_form->handleRequest($request);
        $form = $this->createForm(SearchType::class, null);
        $form->handleRequest($request);

        if ($user instanceof Utilisateur) {
            $prestatire_id = $user->getPrestataire()->getId();
        }

            $prestataire = $entityManager->getRepository(Prestataire::class)->find($prestatire_id);
            

        if ($request->isMethod('post')) {
            if($promotion_form->isSubmitted() && $promotion_form->isValid()){
                
                $pdf = $promotion_form['documentPdf']->getData();
                $pdf_old_name = pathinfo($pdf->getClientOriginalName(), PATHINFO_FILENAME);
                $pdf_name = $pdf_old_name.'-'.uniqid().'.'.$pdf->guessExtension();


                $promotion = $promotion_form->getData();
                if ($promotion instanceof Promotion) {
                    $promotion->setPrestataire($prestataire);
                }

                $pdf->move(
                    $this->getParameter('uploads_directory'),
                    $pdf_name
                );

                $promotion->setDocumentPdf($pdf_name);
                
                $entityManager->persist($promotion);
                $entityManager->flush();

                return $this->redirect("/");
                
            }
        }

        return $this->render('promotion/index.html.twig', [
            'controller_name' => 'Ajouter un promotion',
            'form' => $promotion_form,
            'search' => $form->createView()
        ]);
    }


    //afficher des promotions
    #[Route('/promotion', name: 'promotion')]
    public function getAllPromotions(EntityManagerInterface $entityManager)
    {

        $promotions = $entityManager->getRepository(Promotion::class)->findAll();
        $form = $this->createForm(SearchType::class, null);
    
        return $this->render('prestataire/show.html.twig', [
            'promotions' => $promotions,
            'search' => $form->createView()
        ]);
    }

    //afficher une prmotion

    /**
    * @Route("/promotion/{id}", name="afficher_promotion")
    */
    public function afficher(Promotion $promotion) : Response
    {

        $form = $this->createForm(SearchType::class);

      return $this->render('promotion/show.html.twig', [
       'promotion' => $promotion,
       'search' => $form->createView()
       ]);
    }

}

  