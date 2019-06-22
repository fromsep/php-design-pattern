<?php
namespace PHPDesignPatterns\StructualPatterns\AdapterPattern\AdvancedMediaPlayer;


class Mp4Player implements IAdvancedMediaPlayer
{
    public function playVlc($fileName) {

    }

    public function playMp4($fileName) {
        echo "Play MP4 file:{$fileName}\n";
    }
}