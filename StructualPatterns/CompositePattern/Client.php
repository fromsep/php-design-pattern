<?php
namespace PHPDesignPatterns\StructualPatterns\CompositePattern;

include "../../vendor/autoload.php";

$ceo = new Employee('zhangsan', 'CEO', 30000);

$headSales      = new Employee('lisi', 'Head Sales', 20000);
$headMarketing  = new Employee('wanger', 'Head Marketing', 20000);

$saler1         = new Employee('A', "Sales", 10000);
$saler2         = new Employee('B', "Sales", 10000);

$marketor1      = new Employee('C', 'Marketing', 10000);
$marketor2      = new Employee('D', 'Marketing', 10000);


$ceo->addSubordinate($headSales);
$ceo->addSubordinate($headMarketing);

$headSales->addSubordinate($saler1);
$headSales->addSubordinate($saler2);

$headMarketing->addSubordinate($marketor1);
$headMarketing->addSubordinate($marketor2);


foreach ($ceo->getSubordinates() as $subordinate) {
    foreach ($subordinate->getSubordinates() as $subSubordinate) {
        print_r($subordinate->getSubordinates());
    }
}