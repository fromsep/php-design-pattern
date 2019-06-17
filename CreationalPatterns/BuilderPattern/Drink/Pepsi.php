<?php
namespace PHPDesignPatterns\CreationalPatterns\BuilderPattern\Drink;

class Pepsi extends CodeDrink
{

    public function getName()
    {
        return 'Pepsi';
    }

    public function getPrice()
    {
        return 5;
    }
}