<?php
namespace PHPDesignPatterns\CreationalPatterns\AbstractFactoryPattern\Factory;


use PHPDesignPatterns\CreationalPatterns\AbstractFactoryPattern\Color\Blue;
use PHPDesignPatterns\CreationalPatterns\AbstractFactoryPattern\Color\Color;
use PHPDesignPatterns\CreationalPatterns\AbstractFactoryPattern\Color\Red;

class ColorFactory extends AbstractFactory
{

    /**
     * @param $colorName
     * @return Color|null
     */
    public function getColor($colorName) {
        if ($colorName == 'Red') {
            return new Red();
        }

        if($colorName == 'Blue') {
            return new Blue();
        }

        return NULL;
    }


    public function getShape($shapeName)
    {
        return NULL;
    }
}