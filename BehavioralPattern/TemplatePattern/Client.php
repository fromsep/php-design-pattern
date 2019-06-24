<?php
namespace PHPDesignPatterns\BehavioralPattern\TemplatePattern;

use PHPDesignPatterns\BehavioralPattern\TemplatePattern\Game\FootBall;
use PHPDesignPatterns\BehavioralPattern\TemplatePattern\Game\Cricket;


include "../../vendor/autoload.php";

$footBall = new FootBall();
$footBall->play();


$cricket = new Cricket();
$cricket->play();