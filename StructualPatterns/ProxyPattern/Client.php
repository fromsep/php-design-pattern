<?php
namespace PHPDesignPatterns\StructualPatterns\ProxyPattern;

use PHPDesignPatterns\StructualPatterns\ProxyPattern\Image\ProxyImage;

include "../../vendor/autoload.php";


$imageName = "a";
$proxyImage = new ProxyImage($imageName);
$proxyImage->display();

echo '<pre>';
print_r($proxyImage);
exit;