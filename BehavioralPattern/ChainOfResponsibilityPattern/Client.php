<?php
namespace PHPDesignPatterns\BehavioralPattern\ChainOfResponsibilityPattern;

use PHPDesignPatterns\BehavioralPattern\ChainOfResponsibilityPattern\Logger\Logger;
use PHPDesignPatterns\BehavioralPattern\ChainOfResponsibilityPattern\Logger\ConsoleLogger;
use PHPDesignPatterns\BehavioralPattern\ChainOfResponsibilityPattern\Logger\FileLogger;
use PHPDesignPatterns\BehavioralPattern\ChainOfResponsibilityPattern\Logger\ErrorLogger;

include "../../vendor/autoload.php";

$consoleLogger  = new ConsoleLogger(Logger::INFO);
$fileLogger     = new FileLogger(Logger::DEBUG);
$errorLogger    = new ErrorLogger(Logger::ERROR);

$fileLogger->setNextLogger($consoleLogger);
$errorLogger->setNextLogger($fileLogger);


$loggerChains = $errorLogger;


$loggerChains->logMessage(Logger::INFO, 'info message');
echo "\n";
$loggerChains->logMessage(Logger::DEBUG, 'debug message');
echo "\n";
$loggerChains->logMessage(Logger::ERROR, 'error message');
