<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class WelcomeController extends AbstractController
{
    #[Route('/', name: 'app_welcome')]
    public function index(): Response
    {
        return $this->render('welcome/index.html.twig', [
            'name' => 'Developer',
        ]);
    }
    #[Route('/welcome/{name}', name: 'welcome_hello')]
    public function hello(string $name): Response
    {
        return $this->render('welcome/index.html.twig', [
            'name' => $name,
        ]);
    }
}
