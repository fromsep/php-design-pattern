<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 2019/6/16
 * Time: 23:31
 */
namespace PHPDesignPatterns\CreationalPatterns\FactoryPattern\Shape;
class Rectangle implements Shape
{
    public function draw() {
        echo "draw a rectangle\n";
    }
}