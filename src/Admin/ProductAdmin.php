<?php

declare(strict_types=1);

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

final class ProductAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $filter): void
    {
        $filter
            //->add('id')
            ->add('name')
            ->add('description')
            ->add('active')
            ->add('created')
            ->add('updated')
            ;
    }

    protected function configureListFields(ListMapper $list): void
    {
        $list
            //->add('id')
            ->add('Category')
            ->add('name')
            ->add('description')
            ->add('active')
            ->add('created')
            ->add('updated')
            ->add(ListMapper::NAME_ACTIONS, null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }

    protected function configureFormFields(FormMapper $form): void
    {
        $form
            //->add('id')
            ->add('name')
            ->add('description')
            ->add('active')
            //->add('created')
            //->add('updated')
            ->add('Category')
            ;
    }

    protected function configureShowFields(ShowMapper $show): void
    {
        $show
            //->add('id')
            ->add('name')
            ->add('description')
            ->add('active')
            ->add('created')
            ->add('updated')
            ->add('Category')
            ;
    }
}