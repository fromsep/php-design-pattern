<?php
namespace PHPDesignPatterns\BehavioralPattern\VisitorPattern\ComputerPart;

use PHPDesignPatterns\BehavioralPattern\VisitorPattern\IVisitor;


class Computer extends ComputerPart
{
    /**
     * @var ComputerPart[]
     */
    private $parts = [];

    public function __construct() {
        $this->parts = [new KeyBoard(), new Mouse(), new Monitor()];
        parent::__construct();
    }


    public function accept(IVisitor $visitor) {
        foreach ($this->parts as $computerPart) {
            $computerPart->accept($visitor);
        }

        $visitor->visit($this);
    }
}