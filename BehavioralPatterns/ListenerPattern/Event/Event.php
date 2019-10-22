<?php
namespace PHPDesignPatterns\BehavioralPatterns\ListenerPattern\Event;

use PHPDesignPatterns\BehavioralPatterns\ListenerPattern\Machine;

abstract class Event
{
    private $name;
    /**
     * @var Machine
     */
    private $machine;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setMachine(Machine $machine) {
        $this->machine = $machine;
    }

    public function getMachine() {
        return $this->machine;
    }
}