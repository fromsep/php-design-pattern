<?php
namespace PHPDesignPatterns\StructualPatterns\AdapterPattern\MediaPlayer;


use PHPDesignPatterns\StructualPatterns\AdapterPattern\AdvancedMediaPlayer\IAdvancedMediaPlayer;
use PHPDesignPatterns\StructualPatterns\AdapterPattern\AdvancedMediaPlayer\Mp4Player;
use PHPDesignPatterns\StructualPatterns\AdapterPattern\AdvancedMediaPlayer\VlcPlayer;

class MediaAdapter implements IMediaPlayer {
    /**
     * @var IAdvancedMediaPlayer
     */
    private $advancedMusicPlayer;

    public function __construct($audioType) {
        if ($audioType == 'vlc') {
            $this->advancedMusicPlayer = new VlcPlayer();
        }

        if($audioType == 'mp4') {
            $this->advancedMusicPlayer = new Mp4Player();
        }
    }


    public function play($audioType, $fileName) {
        if ($audioType == 'vlc') {
            $this->advancedMusicPlayer->playVlc($fileName);
        }

        if ($audioType == 'mp4') {
            $this->advancedMusicPlayer->playMp4($fileName);
        }
    }
}