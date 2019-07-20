<?php
namespace PHPDesignPatterns\BehavioralPatterns\ChainOfResponsibilityPattern\Logger;

abstract class Logger
{
    const INFO  = 1;
    const DEBUG = 2;
    const ERROR = 3;

    /**
     * @var Logger
     */
    private $nextLogger;
    private $level;

    public function __construct($level) {
        $this->level = $level;
    }

    public function setNextLogger(Logger $logger) {
        $this->nextLogger = $logger;
    }

    public function logMessage($level, $message) {
        if($this->level <= $level) {
            $this->write($message);
        }

        if($this->nextLogger) {
            $this->nextLogger->logMessage($level, $message);
        }
    }

    abstract protected function write($message);

}