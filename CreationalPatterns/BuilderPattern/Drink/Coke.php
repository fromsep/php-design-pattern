<?php
namespace PHPDesignPatterns\CreationalPatterns\BuilderPattern\Drink;


class Coke extends CodeDrink
{
    public function getName()
    {
        return 'Coke';
    }

    public function getPrice()
    {
        return 5;
    }

}