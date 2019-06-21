<?php
namespace PHPDesignPatterns\StructualPatterns\DecoratorPattern\Decorator;

use PHPDesignPatterns\StructualPatterns\DecoratorPattern\IShape;

abstract class DecoratorShape implements IShape
{
    /**
     * @var IShape
     */
    protected $shape;

    public function draw() {
        $this->shape->draw();
    }
}