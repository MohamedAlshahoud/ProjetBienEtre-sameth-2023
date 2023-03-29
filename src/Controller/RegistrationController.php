<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Security\EmailVerifier;
use App\Form\RegistrationFormType;
use App\Form\SearchType;
use Symfony\Component\Mime\Address;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class RegistrationController extends AbstractController
{
    private EmailVerifier $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }

    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new Utilisateur();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        $search_form = $this->createForm(SearchType::class);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode le mot de passe clair
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();

            // génère une URL signée et l'envoie par e-mail à l'utilisateur
            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('ay1665ay@gmail.com', 'Bien Etre'))
                    ->to($user->getEmail())
                    ->subject('Veuillez confirmer votre email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );
            // faites tout ce dont vous avez besoin ici, comme envoyer un e-mail
            

            return $this->redirectToRoute('app_home');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
            'search' => $search_form->createView(),
        ]);
    }


    #[Route('/verify/email', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request, TranslatorInterface $translator): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // valide le lien de confirmation de l'e-mail, définit User::isVerified=true et persiste
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));

            return $this->redirectToRoute('app_register');
        }

        // @TODO Modifiez la redirection en cas de succès et gérez ou supprimez le message flash dans vos modèles
        $this->addFlash('success', 'Your email address has been verified.');

        return $this->redirectToRoute('app_home');
    }
}

