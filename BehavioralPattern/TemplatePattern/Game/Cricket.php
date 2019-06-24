<?php
namespace PHPDesignPatterns\BehavioralPattern\TemplatePattern\Game;


class Cricket extends Game
{
    private $type = 'Cricket';

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