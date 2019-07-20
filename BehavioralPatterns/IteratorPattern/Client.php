<?php
namespace PHPDesignPatterns\BehavioralPatterns\IteratorPattern;

use PHPDesignPatterns\BehavioralPatterns\IteratorPattern\Container\NameRepository;

include "../../vendor/autoload.php";


$nameRepository = new NameRepository();

$nameIterator = $nameRepository->getIterator();

while ($nameIterator->hasNext()) {
    $name = $nameIterator->next();
    echo "{$name}\n";
}





