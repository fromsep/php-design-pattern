<?php
namespace PHPDesignPatterns\BehavioralPatterns\StatePattern\State;

use PHPDesignPatterns\BehavioralPatterns\StatePattern\Context;

class StartState implements IState
{
    private $state = '';

    public function __construct() {
        $this->state = 'Start';
    }

    public function doAction(Context $context) {
        $context->setState($this);
    }


    public function showState() {
        echo "State: {$this->state}\n";
    }

}