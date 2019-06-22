<?php
namespace PHPDesignPatterns\StructualPatterns\AdapterPattern\MediaPlayer;

Interface IMediaPlayer
{
    public function play($audioType, $fileName);
}