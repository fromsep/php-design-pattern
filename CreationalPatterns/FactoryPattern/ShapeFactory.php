<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 2019/6/16
 * Time: 23:32
 */
namespace PHPDesignPatterns\CreationalPatterns\FactoryPattern;

use PHPDesignPatterns\CreationalPatterns\FactoryPattern\Shape\Shape;
use PHPDesignPatterns\CreationalPatterns\FactoryPattern\Shape\Circle;
use PHPDesignPatterns\CreationalPatterns\FactoryPattern\Shape\Square;
use PHPDesignPatterns\CreationalPatterns\FactoryPattern\Shape\Rectangle;

class ShapeFactory
{
    /**
     * @param $shapeType
     * @return Shape|null
     */
    public function getShape($shapeType) {
        if($shapeType == 'Circle') {
            return new Circle();
        }
        if($shapeType == 'Square') {
            return new Square();
        }
        if($shapeType == 'Rectangle') {
            return new Rectangle();
        }
        return NULL;
    }
}