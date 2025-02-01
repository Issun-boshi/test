<?php

namespace App\Entity;

use App\Repository\ItemTypeRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;

#[ORM\Entity(repositoryClass: ItemTypeRepository::class)]
#[ORM\Table(name: 'item_types')]
class ItemType {
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

    public function getItemId(): ?int {
        return $this->item_id;
    }

    public function setItemId(int $itemId): static {
        $this->item_id = $itemId;

        return $this;
    }

    #[ORM\Column]
    private ?int $type_id = null;

    public function getTypeId(): ?int {
        return $this->type_id;
    }

    public function setTypeId(int $typeId): static {
        $this->type_id = $typeId;

        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Item::class)]
    #[ORM\JoinColumn(name: 'item_id', referencedColumnName:'id')]
    private $item;

    public function getItem() {
        return $this->item;
    }

    #[ORM\ManyToOne(targetEntity: Type::class)]
    #[ORM\JoinColumn(name: 'type_id', referencedColumnName:'id')]
    private $type;

    public function getType() {
        return $this->type;
    }
}
