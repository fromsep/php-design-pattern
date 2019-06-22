<?php
namespace PHPDesignPatterns\StructualPatterns\FlyweightPattern\Shape;

class Circle implements IShape {
    private $x;
    private $y;
    private $color;
    private $radius;

    public function __construct($color) {
        $this->color = $color;
    }

    public function setX($x) {
        $this->x = $x;
    }

    public function setY($y) {
        $this->y = $y;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function draw() {
        echo "Draw {$this->color} Circle - {$this->radius} at [{$this->x},{$this->y}]\n";
    }
}