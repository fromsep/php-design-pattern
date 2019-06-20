<?php
namespace PHPDesignPatterns\StructualPatterns\FacadePattern;

include "../../vendor/autoload.php";

$shapeMaker = new ShapeMaker();

$shapeMaker->drawCircle();
$shapeMaker->drawSquare();
$shapeMaker->drawRectangle();


