<?php
namespace PHPDesignPatterns\StructualPatterns\DecoratorPattern\Shape;

use PHPDesignPatterns\StructualPatterns\DecoratorPattern\IShape;

class Rectangle implements IShape
{
    public function draw() {
        echo  "Draw shape Rectangle\n";
    }
}