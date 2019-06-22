<?php
namespace PHPDesignPatterns\StructualPatterns\BridgePattern\Draw;

interface IDrawApi
{
    public function drawCircle($radius, $x, $y);
}