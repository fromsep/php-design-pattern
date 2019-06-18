<?php
namespace PHPDesignPatterns\CreationalPatterns\AbstractFactoryPattern\Factory;


use PHPDesignPatterns\CreationalPatterns\AbstractFactoryPattern\Shape\Shape;
use PHPDesignPatterns\CreationalPatterns\AbstractFactoryPattern\Shape\Circle;
use PHPDesignPatterns\CreationalPatterns\AbstractFactoryPattern\Shape\Square;

class ShapeFactory extends AbstractFactory
{

    public function getColor($colorName)
    {
        return NULL;
    }

    /**
     * @param $shapeName
     * @return Shape|null
     */
    public function getShape($shapeName) {
        if($shapeName == 'Circle') {
            return new Circle();
        }

        if($shapeName == 'Square') {
            return new Square();
        }

        return NULL;
    }
}