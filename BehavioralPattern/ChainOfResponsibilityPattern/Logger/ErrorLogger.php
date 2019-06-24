<?php
namespace PHPDesignPatterns\BehavioralPattern\ChainOfResponsibilityPattern\Logger;


class ErrorLogger extends Logger
{
    protected function write($message) {
        echo "Error:{$message}\n";
    }
}