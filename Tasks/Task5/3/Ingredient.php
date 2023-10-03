<?php

class Ingredient {
    private $name;
    private $cost;

    public function __construct(string $name, int $cost) {
        $this->name = $name;
        $this->cost = $cost;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getCost(): string {
        return $this->cost;
    }

    public function setCost(int $cost): void {
        $this->cost = $cost;
    }
}
