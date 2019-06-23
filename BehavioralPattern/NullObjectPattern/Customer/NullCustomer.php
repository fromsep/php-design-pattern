<?php
namespace PHPDesignPatterns\BehavioralPattern\NullObjectPattern\Customer;


class NullCustomer extends Customer
{

    public function getName() {
        return "NOT Available in Customer Database";
    }

    public function isNil() {
        return true;
    }
}