<?php
namespace PHPDesignPatterns\BehavioralPattern\VisitorPattern;

use PHPDesignPatterns\BehavioralPattern\VisitorPattern\ComputerPart\Computer;

include "../../vendor/autoload.php";


$visitor = new Visitor();
$computer = new Computer();

$computer->accept($visitor);




