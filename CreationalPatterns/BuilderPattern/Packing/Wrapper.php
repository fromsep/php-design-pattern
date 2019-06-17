<?php
namespace PHPDesignPatterns\CreationalPatterns\BuilderPattern\Packing;

use PHPDesignPatterns\CreationalPatterns\BuilderPattern\Packing;

class Wrapper implements Packing
{
    public function pack() {
        return 'Wrapper';
    }
}