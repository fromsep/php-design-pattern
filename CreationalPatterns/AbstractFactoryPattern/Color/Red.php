<?php
namespace PHPDesignPatterns\CreationalPatterns\AbstractFactoryPattern\Color;

class Red extends Color
{
    public function __construct()
    {
        $this->colorName = 'Red';
    }
}