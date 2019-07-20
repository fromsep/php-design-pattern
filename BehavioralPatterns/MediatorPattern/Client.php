<?php
namespace PHPDesignPatterns\BehavioralPatternss\MediatorPattern;

include "../../vendor/autoload.php";


$tom = new User('Tom');
$jerry = new User('Jerry');

$tom->sendMessage('hello world');
$tom->sendMessage('A');

$jerry->sendMessage('B');
$jerry->sendMessage('C');

