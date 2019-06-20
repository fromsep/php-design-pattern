<?php
namespace PHPDesignPatterns\StructualPatterns\CompositePattern;

class Employee
{
    private $name;
    private $dept;
    private $salary;
    /**
     * @var Employee[]
     */
    private $subordinates = [];

    public function __construct($name, $dept, $salary) {
        $this->name     = $name;
        $this->dept     = $dept;
        $this->salary   = $salary;
    }

    public function getName() {
        return $this->getName();
    }

    public function addSubordinate(Employee $employee) {
        $this->subordinates[] = $employee;
    }


    public function removeSubordinate(Employee $employee) {
        foreach ($this->subordinates as $key => $subordinate) {
            if( $subordinate->getName() == $employee->getName() ) {
                unset($this->subordinates[$key]);
            }
        }
    }

    public function getSubordinates() {
        return $this->subordinates;
    }
}