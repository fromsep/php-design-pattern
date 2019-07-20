<?php
namespace PHPDesignPatterns\BehavioralPatternss\ChainOfResponsibilityPattern\Logger;


class ErrorLogger extends Logger
{
    protected function write($message) {
        echo "Error:{$message}\n";
    }
}