<?php

class Entree {
    private $name;
    protected $ingredients = [];

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
}
