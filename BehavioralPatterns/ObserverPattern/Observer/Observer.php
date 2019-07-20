<?php
namespace PHPDesignPatterns\BehavioralPatterns\ObserverPattern\Observer;

use PHPDesignPatterns\BehavioralPatterns\ObserverPattern\Subject;

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