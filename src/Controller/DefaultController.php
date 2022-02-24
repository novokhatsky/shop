<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public function index(\Doctrine\ORM\EntityManagerInterface $en, Request $request): Response
    {
        $cr = $en->getRepository('App:Category');

        $categories = $cr->findAll();

        return $this->render('default/index.html.twig', [
            'categories' => $categories,
        ]);
    }
    
    public function category(int $id, \Doctrine\ORM\EntityManagerInterface $en)
    {
        $category = $en->getRepository('App:Category')->find($id);

        return $this->render('default/category.html.twig', [
            'category' => $category,
        ]);
    }

}

