<?php
namespace PHPDesignPatterns\BehavioralPatterns\IteratorPattern\Container;

use PHPDesignPatterns\BehavioralPatterns\IteratorPattern\Iterator\NameIterator;

class NameRepository implements IContainer
{
    public function getIterator() {
        return new NameIterator();
    }
}