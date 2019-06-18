<?php
namespace PHPDesignPatterns\CreationalPatterns\AbstractFactoryPattern\Factory;

use PHPDesignPatterns\CreationalPatterns\AbstractFactoryPattern\Color\Color;
use PHPDesignPatterns\CreationalPatterns\AbstractFactoryPattern\Shape\Shape;

abstract class AbstractFactory
{

    /**
     * @param $colorName
     * @return Color
     */
    public abstract function getColor($colorName);

    /**
     * @param $shapeName
     * @return Shape
     */
    public abstract function getShape($shapeName);

}