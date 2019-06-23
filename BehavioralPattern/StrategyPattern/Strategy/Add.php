<?php
namespace PHPDesignPatterns\BehavioralPattern\StrategyPattern\Strategy;


class Add implements IOperation
{
    public function do($number1, $number2) {
        return $number1 + $number2;
    }
}