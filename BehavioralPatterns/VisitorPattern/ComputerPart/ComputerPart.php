<?php
namespace PHPDesignPatterns\BehavioralPattern\VisitorPattern\ComputerPart;

use PHPDesignPatterns\BehavioralPattern\VisitorPattern\IVisitor;

class ComputerPart implements IComputerPart
{
    protected $partName;

    public function __construct() {
        $this->partName = static::class;
    }

    public function accept(IVisitor $visitor) {
        return $visitor->visit($this);
    }

    public function getPartName() {
        return $this->partName;
    }
}