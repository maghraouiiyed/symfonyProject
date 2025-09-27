<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/home', name: 'home_index')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController','index'=>'Bonjour mes étudiants'
        ]);
    }

    #[Route('/go-to-index', name: 'go_to_index')]
    public function goToIndex(): Response
    {
        // redirection vers la route nommée 'home_index'
        return $this->redirectToRoute('home_index');
    }
}