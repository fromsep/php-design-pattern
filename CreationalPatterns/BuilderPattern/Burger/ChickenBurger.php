<?php
namespace PHPDesignPatterns\CreationalPatterns\BuilderPattern\Burger;


class ChickenBurger extends Burger
{
    public function getName() {
        return 'Chicken Burger';
    }

    public function getPrice() {
        return 10;
    }

}