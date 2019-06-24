<?php
namespace PHPDesignPatterns\BehavioralPattern\ObserverPattern\Observer;

use PHPDesignPatterns\BehavioralPattern\ObserverPattern\Subject;

abstract class Observer
{
    /**
     * @var Subject
     */
    protected $subject;

    public function __construct(Subject $subject) {
        $this->subject = $subject;
    }

    public abstract function onUpdate();
}