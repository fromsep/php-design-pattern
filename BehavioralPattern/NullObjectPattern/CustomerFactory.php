<?php
namespace PHPDesignPatterns\BehavioralPattern\NullObjectPattern;


use PHPDesignPatterns\BehavioralPattern\NullObjectPattern\Customer\Customer;
use PHPDesignPatterns\BehavioralPattern\NullObjectPattern\Customer\NullCustomer;
use PHPDesignPatterns\BehavioralPattern\NullObjectPattern\Customer\RealCustomer;

class CustomerFactory
{
    private static $customerNames = ['Tom','Jerry'];

    /**
     * @param $name
     * @return Customer
     */
    public static function getCustomer($name) {
        if(in_array($name, static::$customerNames)) {
            return new RealCustomer($name);
        }

        return new NullCustomer($name);
    }

}