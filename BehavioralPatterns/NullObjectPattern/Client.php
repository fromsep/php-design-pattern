<?php
namespace PHPDesignPatterns\BehavioralPatternss\NullObjectPattern;

include "../../vendor/autoload.php";


$customer1 = CustomerFactory::getCustomer('Tom');
$customer2 = CustomerFactory::getCustomer('Jerry');
$customer3 = CustomerFactory::getCustomer('Cat');



echo "{$customer1->getName()}\n";
echo "{$customer2->getName()}\n";
echo "{$customer3->getName()}\n";

