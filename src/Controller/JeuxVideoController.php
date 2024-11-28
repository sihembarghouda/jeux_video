<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class JeuxVideoController extends AbstractController
{

    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('jeux_video/ajouter.html.twig', [
            'controller_name' => 'JeuxVideoController',
        ]);
    }

    #[Route('/jeux/video', name: 'app_jeux_video')]
    public function jeuxVideo(): Response
    {
        return $this->render('jeux_video/ajouter.html.twig', [
            'controller_name' => 'JeuxVideoController',
        ]);
    }
}
