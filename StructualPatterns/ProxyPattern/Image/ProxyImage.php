<?php
namespace PHPDesignPatterns\StructualPatterns\ProxyPattern\Image;


class ProxyImage implements IImage {
    /**
     * @var IImage
     */
    private $realImage;
    private $imageName;


    public function __construct($imageName) {
        $this->imageName = $imageName;
    }

    public function display() {
        if (is_null($this->realImage)) {
            $this->realImage = new RealImage($this->imageName);
        }
        return $this->realImage->display();
    }
}