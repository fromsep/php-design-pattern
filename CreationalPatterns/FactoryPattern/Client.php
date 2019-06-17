<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 2019/6/16
 * Time: 23:39
 */
namespace PHPDesignPatterns\CreationalPatterns\FactoryPattern;

include "../../vendor/autoload.php";

$factory = new ShapeFactory();

$circle = $factory->getShape("Circle");
$circle->draw();

$square = $factory->getShape("Square");
$square->draw();

$rectangle = $factory->getShape("Rectangle");
$rectangle->draw();

