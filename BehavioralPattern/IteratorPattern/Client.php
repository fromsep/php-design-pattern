<?php
namespace PHPDesignPatterns\BehavioralPattern\IteratorPattern;

use PHPDesignPatterns\BehavioralPattern\IteratorPattern\Container\NameRepository;

include "../../vendor/autoload.php";


$nameRepository = new NameRepository();

$nameIterator = $nameRepository->getIterator();

while ($nameIterator->hasNext()) {
    $name = $nameIterator->next();
    echo "{$name}\n";
}





