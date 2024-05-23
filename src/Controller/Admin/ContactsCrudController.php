<?php

namespace App\Controller\Admin;

use App\Entity\Contacts;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\imageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ContactsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Contacts::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [

            TextField::new('nom'),
            TextField::new('prenom'),
            ImageField::new('photo')
            ->setBasePath('/Uploads')
            ->setUploadDir('public/uploads')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired('true'),
            TextareaField::new('message'),
        ];
    }
    
}
