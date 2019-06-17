<?php
namespace PHPDesignPatterns\CreationalPatterns\BuilderPattern\Burger;

use PHPDesignPatterns\CreationalPatterns\BuilderPattern\Food;
use PHPDesignPatterns\CreationalPatterns\BuilderPattern\Packing\Wrapper;

Abstract class Burger implements Food
{
    public function getName() {}

    public function getPacking() {
        return new Wrapper();
    }

    public function getPrice() {}
}