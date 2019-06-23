<?php
namespace PHPDesignPatterns\BehavioralPattern\CommandPattern\Command;


use PHPDesignPatterns\BehavioralPattern\CommandPattern\Stock;

class BuyStock implements ICommand
{
    private $stock;
    private $amount;

    public function __construct(Stock $stock, $amount) {
        $this->stock = $stock;
        $this->amount = $amount;
    }

    public function execute() {
        $this->stock->buy($this->amount);
    }
}