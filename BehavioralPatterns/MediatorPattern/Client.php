<?php
namespace PHPDesignPatterns\BehavioralPatterns\MediatorPattern;

include "../../vendor/autoload.php";


$tom = new User('Tom');
$jerry = new User('Jerry');

$tom->sendMessage('hello world');
$tom->sendMessage('A');

$jerry->sendMessage('B');
$jerry->sendMessage('C');

