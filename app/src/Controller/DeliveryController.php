<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DeliveryController extends Controller {
    #[Route('/delivery', name: 'delivery')]
    public function index(EntityManagerInterface $entityManager): Response {
        return $this->render('delivery/index.html.twig', [
            'types' =>  $this->getTypes($entityManager),
        ]);
    }
}
