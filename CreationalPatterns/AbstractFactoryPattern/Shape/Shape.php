<?php
namespace PHPDesignPatterns\CreationalPatterns\AbstractFactoryPattern\Shape;


Abstract class Shape implements IShape
{
    protected $shapeName;

    public function draw() {
        echo "Draw Shape {$this->shapeName}";
    }
}