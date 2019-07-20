<?php
namespace PHPDesignPatterns\BehavioralPatterns\StrategyPattern;

use PHPDesignPatterns\BehavioralPatterns\StrategyPattern\Strategy\Add;
use PHPDesignPatterns\BehavioralPatterns\StrategyPattern\Strategy\Multiply;
use PHPDesignPatterns\BehavioralPatterns\StrategyPattern\Strategy\Subtract;

include "../../vendor/autoload.php";

$number1 = 100;
$number2 = 50;


$context = new Context(new Add());
$res = $context->executeOperation($number1, $number2);
echo "{$number1}+{$number2} = {$res}\n";


$context = new Context(new Subtract());
$res = $context->executeOperation($number1, $number2);
echo "{$number1}-{$number2} = {$res}\n";

$context = new Context(new Multiply());
$res = $context->executeOperation($number1, $number2);
echo "{$number1}*{$number2} = {$res}\n";