<?php
namespace PHPDesignPatterns\BehavioralPatterns\MementoPattern;


class Memento
{
    private $state;

    public function __construct($state) {
        $this->state = $state;
    }

    public function getState() {
        return $this->state;
    }

}