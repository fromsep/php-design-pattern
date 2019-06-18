<?php
namespace PHPDesignPatterns\CreationalPatterns\PrototypePattern\Shape;

class Rectangle extends Shape
{
    public function __construct()
    {
        $this->setType('Rectangle');
    }
}