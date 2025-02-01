<?php

namespace App\Entity;

use App\Repository\ItemPropertyRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;

#[ORM\Entity(repositoryClass: ItemPropertyRepository::class)]
#[ORM\Table(name: 'item_properties')]
class ItemProperty {
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
    private ?int $property_id = null;

    public function getPropertyId(): ?int {
        return $this->property_id;
    }

    public function setPropertyId(int $propertyId): static {
        $this->property_id = $propertyId;

        return $this;
    }

    #[ORM\Column(length: 255)]
    private ?string $value = null;

    public function getValue(): ?string {
        return $this->value;
    }

    public function setValue(string $value): static {
        $this->value = $value;

        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Item::class)]
    #[ORM\JoinColumn(name: 'item_id', referencedColumnName:'id')]
    private $item;

    public function getItem() {
        return $this->item;
    }

    #[ORM\ManyToOne(targetEntity: Property::class)]
    #[ORM\JoinColumn(name: 'property_id', referencedColumnName:'id')]
    private $property;

    public function getProperty() {
        return $this->property;
    }
}
