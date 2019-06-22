<?php
namespace PHPDesignPatterns\StructualPatterns\FlyweightPattern;

include "../../vendor/autoload.php";

class Client {
    public static function run() {
        for ($i = 0; $i < 100; $i++) {
            $circle = ShapeFactory::getCircle(static::getRandomColor());
            $circle->setRadius(100);
            $circle->setX(static::getRandomX());
            $circle->setY(static::getRandomY());
            $circle->draw();
        }
    }

    private static function getRandomColor() {
        $colors = ["red", "blue", "yellow", "green"];
        return $colors[mt_rand(0, count($colors) - 1)];
    }

    private static  function getRandomX() {
        return mt_rand(0, 100);
    }

    private static function getRandomY() {
        return mt_rand(0, 100);
    }
}

Client::run();

