<?php
namespace PHPDesignPatterns\StructualPatterns\BridgePattern\Draw;


class DrawGreenCircle implements IDrawApi
{
    public function drawCircle($radius, $x, $y) {
        echo "Draw a green Circle-{$radius} at [$x, $y] \n";
    }
}