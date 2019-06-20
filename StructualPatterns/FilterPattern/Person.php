<?php
namespace PHPDesignPatterns\StructualPatterns\FilterPattern;


class Person {
    private $name;
    private $gender;
    private $maritalStatus;

    public function __construct($name, $gender, $maritalStatus) {
        $this->name             = $name;
        $this->gender           = $gender;
        $this->maritalStatus    = $maritalStatus;
    }


    public function getName() {
        return $this->getName();
    }

    public function getGender() {
        return $this->gender;
    }

    public function getMaritalStatus() {
        return $this->maritalStatus;
    }

}