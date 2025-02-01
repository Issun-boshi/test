<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Subcategory;
use App\Entity\Type;

class Controller extends AbstractController {
    protected function getTypes(EntityManagerInterface $entityManager) {
        $repository = $entityManager->getRepository(Type::class);
        $types = $repository->findBy([], ['order' => 'ASC']); 

        $groupedTypes = [];
        foreach($types as $type) {
            if (is_null($type->getParentId())) {
                $groupedTypes[$type->getId()] = [
                    'children' => [],
                    'title' => $type->getTitle()
                ];
            } else {
                // $groupedTypes[$type->getParentId()]['children'][$type->getId()]= [
                //     'children' => [],
                //     'title' => $type->getTitle()
                // ];
            }
        }

        return $groupedTypes;
    }
}
