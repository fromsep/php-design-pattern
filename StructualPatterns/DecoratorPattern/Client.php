<?php
namespace PHPDesignPatterns\StructualPatterns\DecoratorPattern;

use PHPDesignPatterns\StructualPatterns\DecoratorPattern\Decorator\RedShapeDecorator;
use PHPDesignPatterns\StructualPatterns\DecoratorPattern\Shape\Circle;
use PHPDesignPatterns\StructualPatterns\DecoratorPattern\Shape\Rectangle;

include "../../vendor/autoload.php";


$circle = new Circle();


$redCircle      = new RedShapeDecorator($circle);
$redRectangle   = new RedShapeDecorator(new Rectangle());


$circle->draw();
$redCircle->draw();
$redRectangle->draw();