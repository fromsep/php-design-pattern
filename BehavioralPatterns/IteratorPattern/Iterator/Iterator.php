<?php
namespace PHPDesignPatterns\BehavioralPatterns\IteratorPattern\Iterator;

interface Iterator
{
    public function hasNext();

    public function next();
}