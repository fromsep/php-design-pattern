<?php
namespace PHPDesignPatterns\BehavioralPattern\IteratorPattern\Container;

use PHPDesignPatterns\BehavioralPattern\IteratorPattern\Iterator\NameIterator;

class NameRepository implements IContainer
{
    public function getIterator() {
        return new NameIterator();
    }
}