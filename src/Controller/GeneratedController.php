<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GeneratedController extends AbstractController
{
    #[Route('/generated', name: 'app_generated')]
    public function index(): Response
    {
        return $this->render('generated/index.html.twig', [
            'controller_name' => 'GeneratedController',
        ]);
    }
}
