<?php
namespace PHPDesignPatterns\BehavioralPatterns\ListenerPattern\Event;

use PHPDesignPatterns\BehavioralPatterns\ListenerPattern\Machine;

class ShutdownEvent extends Event
{
    public function __construct(Machine $machine) {
        $this->setMachine($machine);
        $this->setName('Shutdown');
    }
}