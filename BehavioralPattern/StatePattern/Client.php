<?php
namespace PHPDesignPatterns\BehavioralPattern\StatePattern;

use PHPDesignPatterns\BehavioralPattern\StatePattern\State\StartState;
use PHPDesignPatterns\BehavioralPattern\StatePattern\State\StopState;

include "../../vendor/autoload.php";


$context = new Context();

$startState = new StartState();
$startState->doAction($context);
$context->showState();


$stopState = new StopState();
$stopState->doAction($context);
$context->showState();