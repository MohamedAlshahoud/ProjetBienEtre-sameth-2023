<?php

namespace App\Form;

use App\Entity\Utilisateur;
use App\Entity\CodePostal;
use App\Entity\Commune;
use App\Entity\Localite;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtilisateurInternauteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('adresseRue')
        ->add('adresseN')
            ->add('commune', EntityType::class,[
                'class' =>Commune::class,
                'choice_label' => 'commune',
                'required' => false,
                'attr' =>[
                    'class' => 'js-categorie-multiple'
                ]
            ])
            ->add('codePostal', EntityType::class,[
                'class' =>CodePostal::class,
                'choice_label' => 'codePostal',
                'required' => false,
                'attr' =>[
                    'class' => 'js-categorie-multiple'
                ]
            ])
            ->add('localite', EntityType::class,[
                'class' =>Localite::class,
                'choice_label' => 'localite',
                'required' => false,
                'attr' =>[
                    'class' => 'js-categorie-multiple'
                ]
            ])
            ->add('internaute', InternauteType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
