<?php
namespace PHPDesignPatterns\BehavioralPatterns\StrategyPattern\Strategy;

interface IOperation
{
    public function do($number1, $number2);
}