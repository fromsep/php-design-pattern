<?php
namespace PHPDesignPatterns\StructualPatterns\BridgePattern;

use PHPDesignPatterns\StructualPatterns\BridgePattern\Draw\DrawGreenCircle;
use PHPDesignPatterns\StructualPatterns\BridgePattern\Draw\DrawRedCircle;
use PHPDesignPatterns\StructualPatterns\BridgePattern\Shape\Circle;

include "../../vendor/autoload.php";

$redCircle = new Circle(100, 0, 0, new DrawRedCircle());
$greenCircle = new Circle(100, 1, 1, new DrawGreenCircle());

$redCircle->draw();
$greenCircle->draw();

