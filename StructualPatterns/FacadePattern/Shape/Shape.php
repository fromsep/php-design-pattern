<?php
namespace PHPDesignPatterns\StructualPatterns\FacadePattern\Shape;

class Shape implements IShape
{
    protected $name;

    public function draw() {
        echo "Draw {$this->name}\n";
    }

}