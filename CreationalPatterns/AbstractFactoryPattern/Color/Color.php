<?php
namespace PHPDesignPatterns\CreationalPatterns\AbstractFactoryPattern\Color;

abstract class Color implements IColor
{
    protected $colorName;

    public function fill() {
        echo "Fill Color {$this->colorName}";
    }
}