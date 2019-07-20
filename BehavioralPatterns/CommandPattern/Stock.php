<?php
namespace PHPDesignPatterns\BehavioralPatterns\CommandPattern;


class Stock
{
    private $name;
    private $quantity;

    public function __construct($name, $quantity) {
        $this->name = $name;
        $this->quantity = $quantity;
    }


    public function buy($amount) {
        $this->quantity += $amount;
        echo  "Buy [{$this->name}] Stock +{$amount}\n";
    }

    public function sell($amount) {
        $this->quantity -= $amount;
        echo  "Sell [{$this->name}] Stock -{$amount}\n";
    }
}