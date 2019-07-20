<?php
namespace PHPDesignPatterns\BehavioralPatterns\IteratorPattern\Iterator;


class NameIterator implements Iterator {
    private $names = ["Tom", "Jerry", "Cat"];
    private $index = 0;

    /**
     * @return bool
     */
    public function hasNext() {
        if($this->index < count($this->names)) {
            return true;
        }

        return false;
    }

    public function next() {
        if($this->hasNext()) {
            return $this->names[$this->index++];
        }
        return NULL;
    }
}