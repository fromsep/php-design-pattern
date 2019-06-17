<?php
namespace PHPDesignPatterns\CreationalPatterns\BuilderPattern;

use PHPDesignPatterns\CreationalPatterns\BuilderPattern\Burger\ChickenBurger;
use PHPDesignPatterns\CreationalPatterns\BuilderPattern\Burger\VegeBurger;
use PHPDesignPatterns\CreationalPatterns\BuilderPattern\Drink\Coke;
use PHPDesignPatterns\CreationalPatterns\BuilderPattern\Drink\Pepsi;

class MealBuilder
{
    /**
     * @return Meal
     */
    public function prepareVegMeal() {
        $meal = new Meal();

        $meal->addFood(new VegeBurger());
        $meal->addFood(new Coke());

        return $meal;
    }

    /**
     * @return Meal
     */
    public function prepareChickenMeal() {
        $meal = new Meal();

        $meal->addFood(new ChickenBurger());
        $meal->addFood(new Pepsi());

        return $meal;
    }
}