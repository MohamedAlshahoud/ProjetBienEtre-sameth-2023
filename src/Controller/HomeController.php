<?php
namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\CodePostal;
use App\Entity\Image;
use App\Entity\Localite;
use App\Form\SearchType;
use App\Entity\Prestataire;
use App\Entity\Utilisateur;
use App\Form\UtilisateurInternauteType;
use App\Form\UtilisateurPrestataireType;
use App\Repository\HomeSliderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('', name: 'app_home')]
    public function index(EntityManagerInterface $entityManager, HomeSliderRepository $repoHomeSlider, Request $request): Response
    {
        
        $homeSlider = $repoHomeSlider->findBy(['isDisplayed'=>true]);

        $prestataires = $entityManager->getRepository(Prestataire::class)->findBy([],['id' => 'DESC'],4);
        $form = $this->createForm(SearchType::class, null);
        $form->handleRequest($request);
        $categorie_de_mois = $entityManager->getRepository(Categorie::class)->findOneBy(["EnAvant" => 1]);

        $user = $this->getUser();
        
         if ($user instanceof Utilisateur) {
            if ($user->getAdresseN() == null) {
                if ($user->getTypeUtilisateur() == 'prestataire') {
                    $form = $this->createForm(UtilisateurPrestataireType::class, $user);
                    $form->handleRequest($request);
                    $search_form = $this->createForm(SearchType::class);
                    if($form->isSubmitted() && $form->isValid()){

                        $prestataire = $form->get('prestataire')->getData();
                            
                        $image = $form->get('prestataire')->get('image')->getData();
                        if ($image) {
                            $image_name = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                            $new_image_name = $image_name.'-'.uniqid().'.'.$image->guessExtension();
            

                                $image->move(
                                    $this->getParameter('uploads_directory'),
                                    $new_image_name
                                );
                    
            
                            $prestataire->setImage($new_image_name);
                        }

                        $entityManager->persist($user);
                        $entityManager->flush();

                        return $this->render('home/index.html.twig', [
                            'homeSlider' => $homeSlider,
                            'prestataires' => $prestataires,
                            'categorie' => $categorie_de_mois,
                            'search' => $form->createView()
                        ]);
                    }

                    return $this->render('forms/utilisateur_prestatataire_form.html.twig', [
                        'search' => $search_form->createView(),
                        'form' => $form->createView(),
                    ]);
                } else if ($user->getTypeUtilisateur() == 'internaute') {
                    $form = $this->createForm(UtilisateurInternauteType::class, $user);
                    $form->handleRequest($request);
                    $search_form = $this->createForm(SearchType::class);
                    if($form->isSubmitted() && $form->isValid()){

                        $internaute = $form->get('internaute')->getData();
                            
                        $image = $form->get('internaute')->get('image')->getData();
                        if ($image) {
                            $image_name = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                            $new_image_name = $image_name.'-'.uniqid().'.'.$image->guessExtension();
            

                                $image->move(
                                    $this->getParameter('uploads_directory'),
                                    $new_image_name
                                );
                    
            
                            $internaute->setImage($new_image_name);
                        }

                        $entityManager->persist($user);
                        $entityManager->flush();

                        return $this->render('home/index.html.twig', [
                            'homeSlider' => $homeSlider,
                            'prestataires' => $prestataires,
                            'categorie' => $categorie_de_mois,
                            'search' => $form->createView()
                        ]);
                    }

                    return $this->render('forms/utilisateur_internaute_form.html.twig', [
                        'search' => $search_form->createView(),
                        'form' => $form->createView(),
                    ]);
                }
            }
        }

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

        return $this->render('home/index.html.twig', [
            'homeSlider' => $homeSlider,
            'search' => $form->createView(),
            'prestataires' => $prestataires,
            'categorie' => $categorie_de_mois
        ]);
    }


    #[Route('/search/{nom}/{categorie}/{code_postal}/{localite}/{commune}', name: 'app_search_result')]
    public function search_result( EntityManagerInterface $entityManager, Request $request, PaginatorInterface $paginator, $nom, $categorie, $code_postal, $localite, $commune)
    {

        $form = $this->createForm(SearchType::class, null);
        $form->handleRequest($request);

        $prestataires = $entityManager->getRepository(Prestataire::class)->findWithSearch($nom, $categorie, $code_postal, $localite, $commune);
        $prestataires = $paginator->paginate(
            $prestataires, /* query NOT result */
            $request->query->getInt('page', 1),
            2
        );  

        return $this->render('prestataire/index.html.twig', [
            'prestataires' => $prestataires,
            'search' => $form->createView()
        ]);
    }
}
