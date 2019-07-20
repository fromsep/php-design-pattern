<?php
namespace PHPDesignPatterns\BehavioralPatternss\MediatorPattern;


class ChatRoom
{
    public static function showMessage(User $user, $message) {
        $now = date('Y-m-d H:i:s');

        echo "{$now} \t{$user->getName()}:\t{$message}\n";
    }
}