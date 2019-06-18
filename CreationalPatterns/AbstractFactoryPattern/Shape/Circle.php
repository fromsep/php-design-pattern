<?php
namespace PHPDesignPatterns\CreationalPatterns\AbstractFactoryPattern\Shape;

class Circle extends Shape
{
    public function __construct()
    {
        $this->shapeName = 'Circle';
    }
}