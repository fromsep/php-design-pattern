<?php
namespace PHPDesignPatterns\BehavioralPatterns\CommandPattern;

use PHPDesignPatterns\BehavioralPatterns\CommandPattern\Command\ICommand;

class Broker {
    /**
     * @var ICommand[]
     */
    private $commandList = [];


    public function takeCommand(ICommand $command) {
        $this->commandList[] = $command;
    }

    public function placeCommands() {
        foreach ($this->commandList as $command) {
            $command->execute();
        }
        $this->commandList = [];
    }

}