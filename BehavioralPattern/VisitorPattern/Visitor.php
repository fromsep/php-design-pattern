<?php
namespace PHPDesignPatterns\BehavioralPattern\VisitorPattern;

use PHPDesignPatterns\BehavioralPattern\VisitorPattern\ComputerPart\ComputerPart;

class Visitor implements IVisitor
{
    public function visit(ComputerPart $part) {
        echo "Displaying {$part->getPartName()}\n";
    }
}