<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends Controller {
    #[Route('/', name: 'home')]
    public function home(EntityManagerInterface $entityManager): Response {
        return $this->render('home/index.html.twig', [
            'types' =>  $this->getTypes($entityManager),
        ]);
    }
}
