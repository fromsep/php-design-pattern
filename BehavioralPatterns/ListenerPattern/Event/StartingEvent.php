<?php
namespace PHPDesignPatterns\BehavioralPatterns\ListenerPattern\Event;

use PHPDesignPatterns\BehavioralPatterns\ListenerPattern\Machine;

class StartingEvent extends Event
{
    public function __construct(Machine $machine) {
        $this->setMachine($machine);
        $this->setName('Starting');
    }
}