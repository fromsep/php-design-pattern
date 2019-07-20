<?php
namespace PHPDesignPatterns\BehavioralPatterns\MementoPattern;

use PHPDesignPatterns\BehavioralPatterns\TemplatePattern\Game\Cricket;

include "../../vendor/autoload.php";


$originator = new Originator();
$careTacker = new CareTaker();

$originator->setState("#1");
$originator->setState("#2");
$careTacker->add($originator->saveStateToMemento());

$originator->setState("#3");
$careTacker->add($originator->saveStateToMemento());
$originator->setState("#4");

echo "Current State:{$originator->getState()}\n";


echo $originator->getStateFromMemento($careTacker->get(0)) . "\n";
echo $originator->getStateFromMemento($careTacker->get(1)) . "\n";


