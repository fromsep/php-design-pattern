<?php
namespace PHPDesignPatterns\StructualPatterns\BridgePattern\Shape;

use PHPDesignPatterns\StructualPatterns\BridgePattern\Draw\IDrawApi;

abstract class Shape
{
    /**
     * @var IDrawApi
     */
    protected $drawApi;

    public function __construct(IDrawApi $drawApi) {
        $this->drawApi = $drawApi;
    }

    abstract public function draw();
}