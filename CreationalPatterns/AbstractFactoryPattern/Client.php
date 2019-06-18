<?php
namespace PHPDesignPatterns\CreationalPatterns\AbstractFactoryPattern;

include "../../vendor/autoload.php";


$colorFactory = FactoryProducer::getFactory('Color');
$red = $colorFactory->getColor('Red');
$red->fill();

echo "\n";

$shapeFactory = FactoryProducer::getFactory('Shape');
$circle = $shapeFactory->getShape('Circle');
$circle->draw();
