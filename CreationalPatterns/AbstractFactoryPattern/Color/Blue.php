<?php
namespace PHPDesignPatterns\CreationalPatterns\AbstractFactoryPattern\Color;

class Blue extends Color
{
    public function __construct()
    {
        $this->colorName = 'Blue';
    }
}