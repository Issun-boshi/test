<?php

namespace App\Entity;

use App\Repository\ItemImageRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;

#[ORM\Entity(repositoryClass: ItemImageRepository::class)]
#[ORM\Table(name: 'item_images')]
class ItemImage {
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

    #[ORM\Column]
    private ?int $item_id = null;

    public function getItemId(): ?string {
        return $this->item_id;
    }

    public function setItemId(string $itemId): static {
        $this->item_id = $itemId;

        return $this;
    }

    #[ORM\Column]
    private ?string $image = null;

    public function getImage(): ?string {
        return $this->image;
    }

    public function setImage(string $image): static {
        $this->image = $image;

        return $this;
    }

    #[ORM\Column]
    private ?string $description = null;

    public function getDescription(): ?string {
        return $this->description;
    }

    public function setDescription(string $description): static {
        $this->description = $description;

        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Item::class)]
    #[ORM\JoinColumn(name: 'item_id', referencedColumnName:'id')]
    private $item;

    public function getItem() {
        return $this->item;
    }
}
