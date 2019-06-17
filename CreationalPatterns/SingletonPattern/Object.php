<?php
namespace PHPDesignPatterns\CreationalPatterns\SingletonPattern;

class Object
{
    private static $instance;

    // 私有化构造方法
    public function __construct()
    {
    }

    // 私有化克隆方法
    private function __clone()
    {
    }

    // 公有化获取实例方法
    public static function getInstance() {
        if (!self::$instance instanceof Object) {
            self::$instance = new Object();
        }

        return self::$instance;
    }
}