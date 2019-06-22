<?php
namespace PHPDesignPatterns\StructualPatterns\BridgePattern\Shape;


use PHPDesignPatterns\StructualPatterns\BridgePattern\Draw\IDrawApi;

class Circle extends Shape
{
    private $radius;
    private $x;
    private $y;

    public function __construct($radius, $x, $y, IDrawApi $drawApi) {
        $this->radius = $radius;
        $this->x = $x;
        $this->y = $y;
        parent::__construct($drawApi);
    }

    public function draw() {
        $this->drawApi->drawCircle($this->radius, $this->x, $this->y);
    }
}