<?php
namespace PHPDesignPatterns\BehavioralPatterns\StatePattern;

use PHPDesignPatterns\BehavioralPatterns\StatePattern\State\StartState;
use PHPDesignPatterns\BehavioralPatterns\StatePattern\State\StopState;

include "../../vendor/autoload.php";


$context = new Context();

$startState = new StartState();
$startState->doAction($context);
$context->showState();


$stopState = new StopState();
$stopState->doAction($context);
$context->showState();