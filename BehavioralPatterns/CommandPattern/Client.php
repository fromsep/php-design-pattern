<?php
namespace PHPDesignPatterns\BehavioralPatterns\CommandPattern;

use PHPDesignPatterns\BehavioralPatterns\CommandPattern\Command\BuyStock;
use PHPDesignPatterns\BehavioralPatterns\CommandPattern\Command\SellStock;

include "../../vendor/autoload.php";

$stock = new Stock('abc', 2000);

$broker = new Broker();

$broker->takeCommand(new BuyStock($stock, 100));
$broker->takeCommand(new SellStock($stock, 50));

$broker->placeCommands();



