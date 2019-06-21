<?php
namespace PHPDesignPatterns\StructualPatterns\DecoratorPattern\Decorator;


use PHPDesignPatterns\StructualPatterns\DecoratorPattern\IShape;

class RedShapeDecorator extends DecoratorShape
{
    public function __construct(IShape $shape) {
        $this->shape = $shape;
    }

    public function draw() {
        parent::draw();
        $this->setBorder();
    }


    private function setBorder() {
        echo "Set Red Border\n";
    }
}