<?php
namespace PHPDesignPatterns\CreationalPatterns\PrototypePattern;

include "../../vendor/autoload.php";

ShapeCache::loadCache();

$circle1 = ShapeCache::getShape('Circle');
$circle2 = $circle1;
$circle3 = ShapeCache::getShape('Circle');

echo '<pre>';
var_dump($circle1 );
var_dump($circle2);
var_dump($circle3);
exit;


