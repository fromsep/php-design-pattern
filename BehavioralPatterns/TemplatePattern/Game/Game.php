<?php
namespace PHPDesignPatterns\BehavioralPatterns\TemplatePattern\Game;

abstract class Game
{

    public final function play() {
        $this->init();
        $this->startPlay();
        $this->endPlay();
    }

    abstract public function init();

    abstract public function startPlay();

    abstract public function endPlay();

}