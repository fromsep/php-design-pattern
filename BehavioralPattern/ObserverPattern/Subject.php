<?php
namespace PHPDesignPatterns\BehavioralPattern\ObserverPattern;

use PHPDesignPatterns\BehavioralPattern\ObserverPattern\Observer\Observer;

class Subject
{
    /**
     * @var Observer[]
     */
    private $observers = [];
    private $state;

    public function getState() {
        return $this->state;
    }

    public function setState(int $state) {
        if($state == $this->state) {
            return NULL;
        }

        $this->state = $state;
        $this->notifyObservers();
    }

    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer) {
        foreach ($this->observers as  $key => $object) {
            if($observer === $object) {
                unset($this->observers[$key]);
            }
        }
    }


    public function notifyObservers() {
        foreach ($this->observers as $observer) {
            $observer->onUpdate();
        }
    }

}