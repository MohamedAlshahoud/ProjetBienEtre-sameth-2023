<?php

namespace App\Form;

use App\Entity\Utilisateur;
use App\Validator\Constraints\PasswordContainsLettersAndNumbers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un mot de passe',
                    ]),
                    new Length([
                        'min' => 7,
                        'minMessage' => 'Votre mot de passe doit être au moins {{ limit }} caractères',
                        'max' => 4096,
                    ]),
                    new PasswordContainsLettersAndNumbers(),
                ],
            ])
            ->add('typeUtilisateur', ChoiceType::class, [
                'choices'  => [
                    'prestataire' => 'prestataire',
                    'internaute' => 'internaute',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
