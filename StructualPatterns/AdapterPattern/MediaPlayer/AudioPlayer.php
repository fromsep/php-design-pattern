<?php
namespace PHPDesignPatterns\StructualPatterns\AdapterPattern\MediaPlayer;

class AudioPlayer implements IMediaPlayer
{
    public function play($audioType, $fileName) {
        if ($audioType == 'mp3') {
            echo "Playing mp3 file:{$fileName}\n";
            return ;
        }

        if (in_array($audioType, ['vlc', 'mp4'])) {
            $adapter = new MediaAdapter($audioType);
            $adapter->play($audioType, $fileName);
            return ;
        }

        echo "Unsupported audio type:[{$audioType}]\n";
        return ;
    }
}