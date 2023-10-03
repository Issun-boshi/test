<?php

require './meal/Entree.php';
require './food/Ingredient.php';
require './meal/IngredientEntree.php';

use food\Ingredient;
use meal\IngredientEntree;

$ingredientEntree = new IngredientEntree('salad', [
    new Ingredient('cheese', 10),
    new Ingredient('tomato', 2),
    new Ingredient('cucumber', 3)
]);
echo $ingredientEntree->getName(), ' costs ', $ingredientEntree->getCost(), "\n";
