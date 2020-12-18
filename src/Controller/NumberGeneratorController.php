<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NumberGeneratorController extends AbstractController
{
    /**
     * @Route("/", name="number_generator")
     */
    public function index(): Response
    {
        return $this->render('number_generator/index.html.twig', [
            'controller_name' => 'NumberGeneratorController',
        ]);
    }
}
