<?php
namespace PHPDesignPatterns\CreationalPatterns\SingletonPattern;

include "../../vendor/autoload.php";

$obj    = Object::getInstance();
$newObj = Object::getInstance();

if($obj === $newObj) {
    echo "obj == newObj";
}