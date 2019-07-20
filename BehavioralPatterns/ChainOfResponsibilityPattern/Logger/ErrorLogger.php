<?php
namespace PHPDesignPatterns\BehavioralPatterns\ChainOfResponsibilityPattern\Logger;


class ErrorLogger extends Logger
{
    protected function write($message) {
        echo "Error:{$message}\n";
    }
}