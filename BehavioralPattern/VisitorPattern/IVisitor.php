<?php
namespace PHPDesignPatterns\BehavioralPattern\VisitorPattern;

use PHPDesignPatterns\BehavioralPattern\VisitorPattern\ComputerPart\ComputerPart;

interface IVisitor
{
    public function visit(ComputerPart $part);
}