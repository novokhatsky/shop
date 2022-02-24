<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public function index(Request $request): Response
    {

        $name = $request->query->get('name', 'Unknow');

        return $this->render('default/index.html.twig', [
            'name' => $name,
        ]);
    }
}

