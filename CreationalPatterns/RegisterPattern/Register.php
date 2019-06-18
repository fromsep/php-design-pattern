<?php
namespace PHPDesignPatterns\CreationalPatterns\RegisterPattern;

class Register
{
    private static $objects = [];

    public static function set($className, $object) {
        static::$objects[$className] = $object;
    }

    public static function get($className) {
        if(static::has($className)) {
            return static::$objects[$className];
        }
        return NULL;
    }

    public static function has($className) {
        return isset(static::$objects, $className);
    }

    public static function remove($className) {
        unset(static::$objects[$className]);
    }
}