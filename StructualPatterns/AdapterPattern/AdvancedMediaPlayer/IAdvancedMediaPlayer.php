<?php
namespace PHPDesignPatterns\StructualPatterns\AdapterPattern\AdvancedMediaPlayer;

interface IAdvancedMediaPlayer {

    public function playVlc($fileName);

    public function playMp4($fileName);
}