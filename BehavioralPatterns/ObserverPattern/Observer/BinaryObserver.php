<?php
namespace PHPDesignPatterns\BehavioralPatterns\ObserverPattern\Observer;


class BinaryObserver extends Observer
{
    public function onUpdate() {
        echo "Binary:" . decbin($this->subject->getState()) . "\n";
    }
}