<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AboutController extends Controller {
    #[Route('/about', name: 'about')]
    public function index(EntityManagerInterface $entityManager): Response {
        return $this->render('about/index.html.twig', [
            'types' =>  $this->getTypes($entityManager)
        ]);
    }
}
