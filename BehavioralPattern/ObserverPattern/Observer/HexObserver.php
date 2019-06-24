<?php
namespace PHPDesignPatterns\BehavioralPattern\ObserverPattern\Observer;


class HexObserver extends Observer
{
    public function onUpdate() {
        echo  "Hex:" . hexdec($this->subject->getState()). "\n";
    }
}