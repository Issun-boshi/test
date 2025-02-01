<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\News;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NewsController extends Controller {
    #[Route('/news', name: 'news')]
    public function index(EntityManagerInterface $entityManager): Response {
        $repository = $entityManager->getRepository(News::class);
        $news = $repository->findAll();
        return $this->render('news/index.html.twig', [
            'types' =>  $this->getTypes($entityManager),
            'news' =>  $news
        ]);
    }

    #[Route('/news/item/{itemId}', name: 'news-item')]
    public function item(EntityManagerInterface $entityManager, int $itemId): Response {
        $repository = $entityManager->getRepository(News::class);
        $item = $repository->findOneBy([
            'id' => $itemId
        ]);
        if (empty($item)) {
            throw $this->createNotFoundException('Item not found');
        }

        return $this->render('news/item.html.twig', [
            'types' =>  $this->getTypes($entityManager),
            'item' => $item
        ]);
    }
}
