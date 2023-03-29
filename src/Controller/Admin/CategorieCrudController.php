<?php

namespace App\Controller\Admin;

use App\Entity\Categorie;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CategorieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Categorie::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('nom'),
            TextEditorField::new('EnAvant'),
            TextEditorField::new('valide'),
            TextField::new('description'),
            ImageField::new('image')->setBasePath('/assets/img/')
                                    ->setUploadDir('/public/assets/img/')
                                    ->setUploadedFileNamePattern(' [randomhash].[extension]')
                                    ->setRequired(false),
        ];
    }
}
