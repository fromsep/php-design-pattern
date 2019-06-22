<?php
namespace PHPDesignPatterns\StructualPatterns\BridgePattern\Draw;


class DrawRedCircle implements IDrawApi
{
    public function drawCircle($radius, $x, $y) {
        echo "Draw a Red Circle-{$radius} at [$x, $y] \n";
    }
}