<?php
namespace PHPDesignPatterns\BehavioralPattern\StatePattern;


use PHPDesignPatterns\BehavioralPattern\StatePattern\State\IState;

class Context
{
    /**
     * @var IState
     */
    private $state;

    public function setState(IState $state) {
        $this->state = $state;
    }


    public function getState() {
        return $this->state;
    }


    public function showState() {
        return $this->state->showState();
    }

}