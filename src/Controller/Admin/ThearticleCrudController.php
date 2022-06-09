<?php

namespace App\Controller\Admin;

use App\Entity\Thearticle;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ThearticleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Thearticle::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
