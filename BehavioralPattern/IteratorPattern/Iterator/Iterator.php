<?php
namespace PHPDesignPatterns\BehavioralPattern\IteratorPattern\Iterator;

interface Iterator
{
    public function hasNext();

    public function next();
}