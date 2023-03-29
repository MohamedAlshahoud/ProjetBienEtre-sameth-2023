<?php

namespace App\Controller;

use App\Entity\CodePostal;
use App\Entity\Commune;
use App\Entity\Localite;
use App\Entity\Prestataire;
use App\Entity\Stage;
use App\Entity\Promotion;
use App\Entity\Utilisateur;
use App\Form\SearchType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Id;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrestataireController extends AbstractController
{
    #[Route('/prestataire', name: 'app_prestataire')]
    public function index(EntityManagerInterface $entityManager,  Request $request): Response
    {
        $prestataires = $entityManager->getRepository(Prestataire::class)->findBy([],['id' => 'DESC'],4);

        $form = $this->createForm(SearchType::class);

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

        return $this->render('prestataire/index.html.twig', [
            'prestataires' => $prestataires,
            'search' => $form->createView()
        ]);
    }
    
    
    #[Route('/prestataire/{id}', name:'afficher_prestataire')]
    public function afficher(Prestataire $prestataire, EntityManagerInterface $entityManager, $id) : Response
    {
        $repository = $entityManager->getRepository(Stage::class);
        $stages = $repository->findBy(["prestataire" => $id]);

        $repository = $entityManager->getRepository(Promotion::class);
        $promotions = $repository->findBy(["prestataire" => $id]);

        $form = $this->createForm(SearchType::class);

      return $this->render('prestataire/show.html.twig', [
       'stages' => $stages,
       'promotions' => $promotions,
       'prestataire' => $prestataire,
       'adresseRue' => $prestataire->getUtilisateur()->getAdresseRue(),
       'adresseN' => $prestataire->getUtilisateur()->getAdresseN(),
       'commune' => $prestataire->getUtilisateur()->getCommune()->getCommune(),
       'localite' => $prestataire->getUtilisateur()->getLocalite()->getLocalite(),
       'codePostal' => $prestataire->getUtilisateur()->getCodePostal()->getCodePostal(),
       'search' => $form->createView()
       ]);
    }
}