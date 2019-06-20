<?php
namespace PHPDesignPatterns\StructualPatterns\FilterPattern\Criteria;

use PHPDesignPatterns\StructualPatterns\FilterPattern\Person;

interface ICriteria
{
    const GENDER_FEMALE = 'female';
    const GENDER_MALE   = 'male';


    /**
     * @param Person[] $persons
     * @return Person[]
     */
    public function meet($persons);
}