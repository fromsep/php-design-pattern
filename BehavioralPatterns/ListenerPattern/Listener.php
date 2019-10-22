<?php
namespace PHPDesignPatterns\BehavioralPatterns\ListenerPattern;

use PHPDesignPatterns\BehavioralPatterns\ListenerPattern\Event\Event;

class Listener
{
    public function handleEvent(Event $event) {
        echo "Machine[{$event->getMachine()->getName()}] is {$event->getName()}\n";
    }
}