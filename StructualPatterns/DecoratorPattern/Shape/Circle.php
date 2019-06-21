<?php
namespace PHPDesignPatterns\StructualPatterns\DecoratorPattern\Shape;

use PHPDesignPatterns\StructualPatterns\DecoratorPattern\IShape;

class Circle implements IShape {

    public function draw() {
        echo "Draw shape Circle\n";
    }
}