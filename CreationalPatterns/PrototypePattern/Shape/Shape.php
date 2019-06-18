<?php
namespace PHPDesignPatterns\CreationalPatterns\PrototypePattern\Shape;

class Shape implements IShape
{
    private $id;
    private $type;

    public function getId() {
        return $this->getId();
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function clone() {
        return clone $this;
    }
}