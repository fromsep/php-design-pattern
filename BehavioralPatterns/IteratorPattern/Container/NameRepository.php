<?php
namespace PHPDesignPatterns\BehavioralPatternss\IteratorPattern\Container;

use PHPDesignPatterns\BehavioralPatternss\IteratorPattern\Iterator\NameIterator;

class NameRepository implements IContainer
{
    public function getIterator() {
        return new NameIterator();
    }
}