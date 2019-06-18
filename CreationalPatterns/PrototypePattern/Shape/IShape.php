<?php
namespace PHPDesignPatterns\CreationalPatterns\PrototypePattern\Shape;

interface IShape
{
    public function getId();

    public function setId($id);

    public function getType();

    public function setType($type);
}