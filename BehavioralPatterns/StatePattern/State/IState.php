<?php
namespace PHPDesignPatterns\BehavioralPatterns\StatePattern\State;

use PHPDesignPatterns\BehavioralPatterns\StatePattern\Context;

interface IState
{
    public function doAction(Context $context);

    public function showState();
}