<?php

namespace App\Controller;

use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Item;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Subcategory;
use App\Entity\Type;

class CatalogController extends Controller {
    #[Route('/catalog/{typeId}', name: 'catalog')]
    public function catalog(EntityManagerInterface $entityManager, int $typeId): Response {
        $repository = $entityManager->getRepository(Type::class);
        $type = $repository->findOneBy([
            'id' => $typeId
        ]);
        if (empty($type)) {
            throw $this->createNotFoundException('Type not found');
        }

        return $this->render('catalog/index.html.twig', [
            'type' => $type,
            'types' =>  $this->getTypes($entityManager)
        ]);
    }

    #[Route('/catalog/item/{itemId}', name: 'catalog-item')]
    public function item(EntityManagerInterface $entityManager, int $itemId): Response {
        $repository = $entityManager->getRepository(Item::class);
        $item = $repository->findOneBy([
            'id' => $itemId
        ]);
        if (empty($item)) {
            throw $this->createNotFoundException('Item not found');
        }

        return $this->render('catalog/item.html.twig', [
            'item' => $item,
            'types' =>  $this->getTypes($entityManager)
        ]);
    }
}
