<?php
namespace PHPDesignPatterns\BehavioralPatterns\ObserverPattern\Observer;


class OctalObserver extends Observer
{
    public function onUpdate() {
        echo "Octal:" . octdec($this->subject->getState()) . "\n";
    }
}