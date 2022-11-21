<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MicoPostController extends AbstractController
{
    #[Route('/mico-post', name: 'app_mico_post')]
    public function index(): Response
    {
        return $this->render('mico_post/index.html.twig', [
            'controller_name' => 'MicoPostController',
        ]);
    }
}
