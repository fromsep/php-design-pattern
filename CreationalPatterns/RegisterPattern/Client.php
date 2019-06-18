<?php
namespace PHPDesignPatterns\CreationalPatterns\RegisterPattern;

include "../../vendor/autoload.php";


$obj = new Object();
Register::set(Object::class, $obj);
$newObj = Register::get(Object::class);

echo '<pre>';
var_dump($obj);
var_dump($newObj);
exit;

