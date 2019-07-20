<?php
namespace PHPDesignPatterns\BehavioralPatterns\ObserverPattern;

use PHPDesignPatterns\BehavioralPatterns\ObserverPattern\Observer\BinaryObserver;
use PHPDesignPatterns\BehavioralPatterns\ObserverPattern\Observer\HexObserver;
use PHPDesignPatterns\BehavioralPatterns\ObserverPattern\Observer\OctalObserver;

include "../../vendor/autoload.php";

$subject = new Subject();

$hexObserver    = new HexObserver($subject);
$octalObserver  = new OctalObserver($subject);
$binaryObserver = new BinaryObserver($subject);


$subject->attach($hexObserver);
$subject->attach($octalObserver);


$subject->setState(0);
$subject->setState(2);
$subject->setState(2);

$subject->detach($binaryObserver);
$subject->setState(23);

