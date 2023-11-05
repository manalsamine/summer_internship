<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConventionController extends AbstractController
{
    /**
     * @Route("/convention", name="app_convention")
     */
    public function index(): Response
    {
        return $this->render('convention/index.html.twig', [
            'controller_name' => 'manal',
        ]);
    }
}
