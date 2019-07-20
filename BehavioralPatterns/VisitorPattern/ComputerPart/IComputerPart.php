<?php
namespace PHPDesignPatterns\BehavioralPattern\VisitorPattern\ComputerPart;

use PHPDesignPatterns\BehavioralPattern\VisitorPattern\IVisitor;

interface IComputerPart
{
    public function accept(IVisitor $visitor);
}