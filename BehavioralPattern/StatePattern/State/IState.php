<?php
namespace PHPDesignPatterns\BehavioralPattern\StatePattern\State;

use PHPDesignPatterns\BehavioralPattern\StatePattern\Context;

interface IState
{
    public function doAction(Context $context);

    public function showState();
}