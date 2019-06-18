<?php
namespace PHPDesignPatterns\CreationalPatterns\PrototypePattern\Shape;


class Circle extends Shape
{
    public function __construct()
    {
        $this->setType('Circle');
    }
}