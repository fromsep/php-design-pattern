<?php
namespace PHPDesignPatterns\BehavioralPattern\StatePattern\State;

use PHPDesignPatterns\BehavioralPattern\StatePattern\Context;

class StopState implements IState
{
    private  $state = '';

    public function __construct() {
        $this->state = 'Stop';
    }

    public function doAction(Context $context) {
        $context->setState($this);
    }


    public function showState() {
        echo "State: {$this->state}\n";
    }

}