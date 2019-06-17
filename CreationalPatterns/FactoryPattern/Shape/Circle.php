<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 2019/6/16
 * Time: 23:26
 */
namespace PHPDesignPatterns\CreationalPatterns\FactoryPattern\Shape;

class Circle implements Shape
{
    public function draw() {
        echo "draw a circle\n";
    }
}