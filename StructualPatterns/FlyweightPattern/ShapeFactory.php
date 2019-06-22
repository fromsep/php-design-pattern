<?php
namespace PHPDesignPatterns\StructualPatterns\FlyweightPattern;

use PHPDesignPatterns\StructualPatterns\FlyweightPattern\Shape\Circle;

class ShapeFactory {
    /**
     * @var Circle[]
     */
    private static $circleMap = [];

    /**
     * @param $color
     * @return Circle
     */
    public static function getCircle($color) {
        if (!isset(self::$circleMap[$color])) {
            $circle = new Circle($color);
            self::$circleMap[$color] = $circle;
        }
        return self::$circleMap[$color];
    }
}