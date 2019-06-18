<?php
namespace PHPDesignPatterns\CreationalPatterns\AbstractFactoryPattern;


use PHPDesignPatterns\CreationalPatterns\AbstractFactoryPattern\Factory\AbstractFactory;
use PHPDesignPatterns\CreationalPatterns\AbstractFactoryPattern\Factory\ColorFactory;
use PHPDesignPatterns\CreationalPatterns\AbstractFactoryPattern\Factory\ShapeFactory;

class FactoryProducer
{
    /**
     * @param $factoryName
     * @return AbstractFactory|null
     */
    public static function getFactory($factoryName) {
        if($factoryName == 'Color') {
            return new ColorFactory();
        }

        if($factoryName == 'Shape') {
            return new ShapeFactory();
        }

        return NULL;
    }
}