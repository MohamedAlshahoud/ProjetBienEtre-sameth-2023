<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\CodePostal;
use App\Entity\Commune;
use App\Entity\Localite;
use App\Entity\Prestataire;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('categorie', EntityType::class,[
                'class' =>Categorie::class,
                'choice_label' => 'nom',
                'required' => false,
                'attr' =>[
                    'class' => 'js-categorie-multiple'
                ]
            ])
            ->add('prestataire', TextType::class,[
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'nom de prestataire'
                ]
            ])
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
            ->add('Valider', SubmitType::class, [
                'attr' => ['class' => 'btn btn-success'],
            ])
            ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
            //  'data_class' => Categorie::class,
        ]);
    }
}