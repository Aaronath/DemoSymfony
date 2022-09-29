<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GetVariableController extends AbstractController
{
    #[Route('/getvariable/{str<\w+>?Tapez "/" tout ce que vous voulez !}', name: 'getvariable')]

    public function getVariable(string $str): Response
    {
        return $this->render('getvariable.html.twig', [
            'str' => $str
        ]);
    }
}