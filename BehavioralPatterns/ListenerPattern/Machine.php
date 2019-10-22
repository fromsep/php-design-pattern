<?php
namespace PHPDesignPatterns\BehavioralPatterns\ListenerPattern;

use PHPDesignPatterns\BehavioralPatterns\ListenerPattern\Event\RuntimeEvent;
use PHPDesignPatterns\BehavioralPatterns\ListenerPattern\Event\ShutdownEvent;
use PHPDesignPatterns\BehavioralPatterns\ListenerPattern\Event\StartingEvent;

class Machine
{
    private $name;

    /**
     * @var Listener
     */
    private $listener;

    function __construct($name) {
        $this->setName($name);
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function registerListener(Listener $listener) {
        $this->listener = $listener;
    }

    public function start() {
        $this->listener->handleEvent(new StartingEvent($this));
    }

    public function running() {
        $i = 0;
        while ($i++ < 3) {
            $this->listener->handleEvent(new RuntimeEvent($this));
        }
    }

    public function shutDown() {
        $this->listener->handleEvent(new ShutdownEvent($this));
    }
}