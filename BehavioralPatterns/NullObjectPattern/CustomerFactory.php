<?php
namespace PHPDesignPatterns\BehavioralPatterns\NullObjectPattern;


use PHPDesignPatterns\BehavioralPatterns\NullObjectPattern\Customer\Customer;
use PHPDesignPatterns\BehavioralPatterns\NullObjectPattern\Customer\NullCustomer;
use PHPDesignPatterns\BehavioralPatterns\NullObjectPattern\Customer\RealCustomer;

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