<?php

namespace App\Form;

use App\Entity\Promotion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PromotionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('description')
            ->add('documentPdf', FileType::class)
            ->add('debut', DateType::class, [
                'widget' => 'choice',])
            ->add('fin', DateType::class, [
                'widget' => 'choice',])
            ->add('affichageDe', DateType::class, [
                'widget' => 'choice',])
            ->add('affichageJusque', DateType::class, [
                'widget' => 'choice',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Promotion::class,
        ]);
    }
}
