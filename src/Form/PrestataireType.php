<?php

namespace App\Form;

use App\Entity\Prestataire;
use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PrestataireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('siteInternet')
            ->add('numTel')
            ->add('numTva')
            ->add('image', FileType::class)
            ->add('propose', EntityType::class,[
                'class' =>Categorie::class,
                'choice_label' => 'nom',
                'multiple' => true,
                'expanded' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Prestataire::class,
        ]);
    }
}
