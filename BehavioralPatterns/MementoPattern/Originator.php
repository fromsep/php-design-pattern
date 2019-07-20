<?php
namespace PHPDesignPatterns\BehavioralPatterns\MementoPattern;


class Originator
{
    private $state;

    public function setState($state) {
        $this->state = $state;
    }

    public function getState() {
        return $this->state;
    }

    public function saveStateToMemento() {
        return new Memento($this->state);
    }

    public function getStateFromMemento(Memento $memento) {
        return $memento->getState();
    }
}