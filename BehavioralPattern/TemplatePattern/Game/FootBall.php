<?php
namespace PHPDesignPatterns\BehavioralPattern\TemplatePattern\Game;


class FootBall extends Game
{
    private $type = 'FootBall';

    public function init() {
        echo "{$this->type} init\n";
    }

    public function startPlay() {
        echo "{$this->type} startPlay\n";
    }

    public function endPlay() {
        echo "{$this->type} endPlay\n";
    }
}