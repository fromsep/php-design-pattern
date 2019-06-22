<?php
namespace PHPDesignPatterns\StructualPatterns\AdapterPattern;

use PHPDesignPatterns\StructualPatterns\AdapterPattern\MediaPlayer\AudioPlayer;

include "../../vendor/autoload.php";

$player = new AudioPlayer();

$player->play('mp3', 'a.mp3');

$player->play('vlc', 'b.vlc');
$player->play('mp4', 'c.mp4');
$player->play('avi', 'd.avi');
