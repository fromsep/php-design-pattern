<?php
namespace PHPDesignPatterns\BehavioralPatternss\ChainOfResponsibilityPattern\Logger;

class FileLogger extends Logger
{
    protected function write($message) {
        echo "File:{$message}\n";
    }
}