<?php
namespace PHPDesignPatterns\CreationalPatterns\BuilderPattern\Drink;

use PHPDesignPatterns\CreationalPatterns\BuilderPattern\Food;
use PHPDesignPatterns\CreationalPatterns\BuilderPattern\Packing\Bottle;

class CodeDrink implements Food
{
    public function getName() {}

    public function getPacking()
    {
        return new Bottle();
    }

    public function getPrice() {}

}