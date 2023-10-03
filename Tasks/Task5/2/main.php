<?php

require './Ingredient.php';

$fish = new Ingredient('fish', 100);
$fish->setCost(150);
echo 'Ingredient ', $fish->getName(), ' costs ', $fish->getCost(), "\n";

$cheese = new Ingredient('cheese', 10);
echo 'Ingredient ', $cheese->getName(), ' costs ', $cheese->getCost(), "\n";
