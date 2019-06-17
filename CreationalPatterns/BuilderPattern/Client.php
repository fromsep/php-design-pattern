<?php
namespace PHPDesignPatterns\CreationalPatterns\BuilderPattern;

use PHPDesignPatterns\CreationalPatterns\BuilderPattern\Burger\VegeBurger;

include "../../vendor/autoload.php";

$mealBuilder = new MealBuilder();

$vegMeal = $mealBuilder->prepareVegMeal();
$vegMeal->showFoodList();

echo "\n";

$chicken = $mealBuilder->prepareChickenMeal();
$chicken->showFoodList();