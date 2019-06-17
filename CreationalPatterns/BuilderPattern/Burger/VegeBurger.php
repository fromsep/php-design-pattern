<?php
namespace PHPDesignPatterns\CreationalPatterns\BuilderPattern\Burger;


class VegeBurger extends Burger
{
    public function getName() {
        return 'Vege Burger';
    }

    public function getPrice() {
        return 8;
    }

}