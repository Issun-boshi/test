<?php

namespace App\Entity;

use App\Repository\TypeRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;

#[ORM\Entity(repositoryClass: TypeRepository::class)]
#[ORM\Table(name: 'types')]
class Type {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $parent_id = null;

    #[ORM\Column]
    private ?int $order = null;

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

    public function getParentId(): ?int {
        return $this->parent_id;
    }

    public function setParentId(int $parentId): static {
        $this->parent_id = $parentId;

        return $this;
    }

    public function getOrder(): ?int {
        return $this->order;
    }

    public function setOrder(int $order): static {
        $this->order = $order;

        return $this;
    }

    #[ORM\OneToMany(targetEntity: ItemType::class, mappedBy: 'type')]
    private PersistentCollection $item_types;

    public function getItemTypes(): PersistentCollection {
        return $this->item_types;
    }
}
