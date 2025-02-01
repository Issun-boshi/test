<?php

namespace App\Entity;

use App\Repository\ItemRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;

#[ORM\Entity(repositoryClass: ItemRepository::class)]
#[ORM\Table(name: 'properties')]
class Property {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int {
        return $this->id;
    }

    public function setId(int $id): static {
        $this->id = $id;

        return $this;
    }

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    public function getTitle(): ?string {
        return $this->title;
    }

    public function setTitle(string $title): static {
        $this->title = $title;

        return $this;
    }

    #[ORM\OneToMany(targetEntity: ItemProperty::class, mappedBy: 'property')]
    private PersistentCollection $item_properties;

    public function getItemProperties(): PersistentCollection {
        return $this->item_properties;
    }
}
