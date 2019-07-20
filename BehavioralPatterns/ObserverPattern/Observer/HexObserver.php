<?php
namespace PHPDesignPatterns\BehavioralPatterns\ObserverPattern\Observer;


class HexObserver extends Observer
{
    public function onUpdate() {
        echo  "Hex:" . hexdec($this->subject->getState()). "\n";
    }
}