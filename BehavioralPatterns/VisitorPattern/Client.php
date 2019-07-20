<?php
namespace PHPDesignPatterns\BehavioralPatterns\VisitorPattern;

use PHPDesignPatterns\BehavioralPatterns\VisitorPattern\ComputerPart\Computer;

include "../../vendor/autoload.php";


$visitor = new Visitor();
$computer = new Computer();

$computer->accept($visitor);




