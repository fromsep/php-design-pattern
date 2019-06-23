<?php
namespace PHPDesignPatterns\BehavioralPattern\StrategyPattern\Strategy;

interface IOperation
{
    public function do($number1, $number2);
}