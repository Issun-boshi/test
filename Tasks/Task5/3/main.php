<?php

require './Ingredient.php';
require './IngredientEntree.php';

$ingredientEntree = new IngredientEntree('salad', [
    new Ingredient('cheese', 10),
    new Ingredient('tomato', 2),
    new Ingredient('cucumber', 3)
]);
echo $ingredientEntree->getName(), ' costs ', $ingredientEntree->getCost(), "\n";
