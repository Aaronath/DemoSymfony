<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/')]

    public function index(): Response
    {
        $str = "SHEEEEEEEEEEEESH";

        return $this->render('home.html.twig', [
            'str' => $str,
        ]);
    }
}