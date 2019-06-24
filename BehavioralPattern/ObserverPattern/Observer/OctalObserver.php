<?php
namespace PHPDesignPatterns\BehavioralPattern\ObserverPattern\Observer;


class OctalObserver extends Observer
{
    public function onUpdate() {
        echo "Octal:" . octdec($this->subject->getState()) . "\n";
    }
}