<?php
namespace PHPDesignPatterns\CreationalPatterns\PrototypePattern\Shape;

class Square extends Shape
{
    public function __construct()
    {
        $this->setType('Square');
    }
}