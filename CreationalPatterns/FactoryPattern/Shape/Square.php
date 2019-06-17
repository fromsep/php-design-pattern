<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 2019/6/16
 * Time: 23:30
 */
namespace PHPDesignPatterns\CreationalPatterns\FactoryPattern\Shape;

class Square implements Shape
{
    public function draw() {
        echo "draw a Square\n";
    }
}