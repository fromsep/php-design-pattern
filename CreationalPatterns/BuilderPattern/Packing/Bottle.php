<?php
namespace PHPDesignPatterns\CreationalPatterns\BuilderPattern\Packing;

use PHPDesignPatterns\CreationalPatterns\BuilderPattern\Packing;

class Bottle implements Packing
{
    public function pack()
    {
        return 'Bottle';
    }
}