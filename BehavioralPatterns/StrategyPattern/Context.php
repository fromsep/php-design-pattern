<?php
namespace PHPDesignPatterns\BehavioralPatterns\StrategyPattern;

use PHPDesignPatterns\BehavioralPatterns\StrategyPattern\Strategy\IOperation;

class Context
{
    /**
     * @var IOperation
     */
    private $operation;

    public function __construct(IOperation $operation) {
        $this->operation = $operation;
    }

    public function executeOperation($number1, $number2) {
        return $this->operation->do($number1, $number2);
    }
}