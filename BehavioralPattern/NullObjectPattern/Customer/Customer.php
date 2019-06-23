<?php
namespace PHPDesignPatterns\BehavioralPattern\NullObjectPattern\Customer;


abstract class Customer
{
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function isNil() {
        return false;
    }


    public function getName() {
        return $this->name;
    }
}