<?php
namespace PHPDesignPatterns\BehavioralPattern\ChainOfResponsibilityPattern\Logger;


class ConsoleLogger extends Logger
{
    protected function write($message) {
        echo "Console:{$message}\n";
    }
}