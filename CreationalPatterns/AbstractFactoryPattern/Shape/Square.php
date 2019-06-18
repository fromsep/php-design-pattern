<?php
namespace PHPDesignPatterns\CreationalPatterns\AbstractFactoryPattern\Shape;


class Square extends Shape
{
    public function __construct()
    {
        $this->shapeName = 'Square';
    }
}