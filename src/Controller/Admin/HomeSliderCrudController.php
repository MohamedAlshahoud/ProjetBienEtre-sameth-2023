<?php

namespace App\Controller\Admin;

use App\Entity\HomeSlider;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class HomeSliderCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return HomeSlider::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('title'),
            ImageField::new('image')->setBasePath('/assets/img/')
                                    ->setUploadDir('/public/assets/img/')
                                    ->setUploadedFileNamePattern('[randomhash].[extension]')
                                    ->setRequired(false),
            BooleanField::new('isDisplayed', 'Display')
        ];
    }
}
