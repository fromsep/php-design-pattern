<?php
namespace PHPDesignPatterns\BehavioralPatterns\MementoPattern;


class CareTaker
{
    /**
     * @var Memento[];
     */
    private $mementos = [];

    public function add(Memento $memento) {
        $this->mementos[] = $memento;
    }

    /**
     * @param $index
     * @return Memento|null
     */
    public function get($index) {
        if(isset($this->mementos[$index])) {
            return $this->mementos[$index];
        }
        return NULL;
    }
}