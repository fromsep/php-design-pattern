<?php
namespace PHPDesignPatterns\CreationalPatterns\PrototypePattern;

use PHPDesignPatterns\CreationalPatterns\PrototypePattern\Shape\Circle;
use PHPDesignPatterns\CreationalPatterns\PrototypePattern\Shape\Rectangle;
use PHPDesignPatterns\CreationalPatterns\PrototypePattern\Shape\Shape;
use PHPDesignPatterns\CreationalPatterns\PrototypePattern\Shape\Square;

class ShapeCache
{
    private static $shapeCache = [];

    /**
     * @param $shapeName
     * @return Shape|null
     */
    public static function getShape($shapeName) {
        if(isset(static::$shapeCache[$shapeName])) {
            return static::$shapeCache[$shapeName]->clone();
        }
        return NULL;
    }

    public static function setShape($shapeName, Shape $shape) {
        static::$shapeCache[$shapeName] = $shape;
    }


    public static function loadCache() {
        $circle = new Circle();
        $circle->setId(1);
        static::setShape($circle->getType(), $circle);

        $square = new Square();
        $square->setId(2);
        static::setShape($square->getType(), $square);

        $rectangle = new Rectangle();
        $rectangle->setId(3);
        static::setShape($rectangle->getType(), $rectangle);
    }



}