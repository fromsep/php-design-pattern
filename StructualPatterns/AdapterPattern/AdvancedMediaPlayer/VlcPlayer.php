<?php
namespace PHPDesignPatterns\StructualPatterns\AdapterPattern\AdvancedMediaPlayer;

class VlcPlayer implements IAdvancedMediaPlayer
{
    public function playVlc($fileName) {
        echo "Play vlc file:{$fileName}\n";
    }

    public function playMp4($fileName) {

    }
}