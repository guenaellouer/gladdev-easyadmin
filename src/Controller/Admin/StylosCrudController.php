<?php

namespace App\Controller\Admin;

use App\Entity\Stylos;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class StylosCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Stylos::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [

            TextField::new('nom_de_scene'),
            TextField::new('prenom'),
            TextField::new('nom'),
            ImageField::new('image')
            ->setBasePath('/Uploads')
            ->setUploadDir('public/uploads')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(true),
            TextField::new('contact_courriel'),
            TextField::new('site_internet'),
            TextEditorField::new('presentation'),
        ];
    }
}
