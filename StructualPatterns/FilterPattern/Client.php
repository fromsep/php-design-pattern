<?php
namespace PHPDesignPatterns\StructualPatterns\FilterPattern;

use PHPDesignPatterns\StructualPatterns\FilterPattern\Criteria\AndCriteria;
use PHPDesignPatterns\StructualPatterns\FilterPattern\Criteria\FemaleCriteria;
use PHPDesignPatterns\StructualPatterns\FilterPattern\Criteria\MaleCriteria;
use PHPDesignPatterns\StructualPatterns\FilterPattern\Criteria\OrCriteria;

include "../../vendor/autoload.php";

$persons[] = new Person("Tom", "male", false);
$persons[] = new Person("Jerry", "male", false);
$persons[] = new Person("King", "female", true);
$persons[] = new Person("Luna", "female", false);


$maleCriteria = new MaleCriteria();
$malePersons = $maleCriteria->meet($persons);

$femaleCriteria = new FemaleCriteria();
$femalePersons = $femaleCriteria->meet($persons);


$andCriteria = new AndCriteria($maleCriteria, $femaleCriteria);
$andPersons = $andCriteria->meet($persons);

$orPersons = new OrCriteria($maleCriteria, $femaleCriteria);
$orPersons = $orPersons->meet($persons);

echo '<pre>';
print_r($orPersons);
exit;