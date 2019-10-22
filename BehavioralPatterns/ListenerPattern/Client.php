<?php
namespace PHPDesignPatterns\BehavioralPatterns\ListenerPattern;

include '../../vendor/autoload.php';


$machine = new Machine('IBM5100');

$machine->registerListener(new Listener());

$machine->start();
$machine->running();
$machine->shutDown();




