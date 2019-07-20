<?php
namespace PHPDesignPatterns\BehavioralPatternss\IteratorPattern;

use PHPDesignPatterns\BehavioralPatternss\IteratorPattern\Container\NameRepository;

include "../../vendor/autoload.php";


$nameRepository = new NameRepository();

$nameIterator = $nameRepository->getIterator();

while ($nameIterator->hasNext()) {
    $name = $nameIterator->next();
    echo "{$name}\n";
}





