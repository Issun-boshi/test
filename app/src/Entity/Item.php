<?php

namespace App\Entity;

use App\Repository\ItemRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;

#[ORM\Entity(repositoryClass: ItemRepository::class)]
#[ORM\Table(name: 'items')]
class Item {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    public function getId(): ?int {
        return $this->id;
    }

    public function setId(int $id): static {
        $this->id = $id;

        return $this;
    }

    public function getTitle(): ?string {
        return $this->title;
    }

    public function setTitle(string $title): static {
        $this->title = $title;

        return $this;
    }

    #[ORM\OneToMany(targetEntity: ItemProperty::class, mappedBy: 'item')]
    private PersistentCollection $item_properties;

    public function getItemProperties(): PersistentCollection {
        return $this->item_properties;
    }

    #[ORM\OneToMany(targetEntity: ItemType::class, mappedBy: 'item')]
    private PersistentCollection $item_types;

    public function getItemTypes(): PersistentCollection {
        return $this->item_types;
    }

    #[ORM\OneToMany(targetEntity: ItemImage::class, mappedBy: 'item')]
    private PersistentCollection $item_images;

    public function getItemImages(): PersistentCollection {
        return $this->item_images;
    }
}
