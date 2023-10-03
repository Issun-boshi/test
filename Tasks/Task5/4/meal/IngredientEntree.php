<?php

namespace meal;

use Exception;

class IngredientEntree extends Entree {
    private $name;

    /* Свойство $name объявлено закрытым, и поэтому ниже
    предоставляется метод для чтения его значения */
    public function getName(): string {
        return $this->name;
    }

    public function __construct(string $name, array $ingredients) {
        if (!is_array($ingredients)) {
            throw new Exception('$ingredients must be an array');
        }

        $this->name = $name;
        $this->ingredients = $ingredients;
    }

    public function getCost(): int {
        $cost = 0;
        foreach ($this->ingredients as $ingredient) {
            $cost += $ingredient->getCost();
        }

        return $cost;
    }
}
