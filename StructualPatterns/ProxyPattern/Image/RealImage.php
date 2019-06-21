<?php
namespace PHPDesignPatterns\StructualPatterns\ProxyPattern\Image;


class RealImage implements IImage {
    private $imageName;

    public function __construct($imageName) {
        $this->imageName = $imageName;
        $this->loadFromDisk();
    }

    private function loadFromDisk() {
        echo "Image:[{$this->imageName}] Load Success\n";
    }

    public function display() {
        echo "Image:[{$this->imageName}] Display\n";
    }

}