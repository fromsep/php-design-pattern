<?php
namespace PHPDesignPatterns\BehavioralPatterns\TemplatePattern;

use PHPDesignPatterns\BehavioralPatterns\TemplatePattern\Game\FootBall;
use PHPDesignPatterns\BehavioralPatterns\TemplatePattern\Game\Cricket;


include "../../vendor/autoload.php";

$footBall = new FootBall();
$footBall->play();


$cricket = new Cricket();
$cricket->play();