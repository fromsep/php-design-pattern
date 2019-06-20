<?php
namespace PHPDesignPatterns\StructualPatterns\FilterPattern\Criteria;

use PHPDesignPatterns\StructualPatterns\FilterPattern\Person;

class FemaleCriteria implements ICriteria
{
    /**
     * @param Person[] $persons
     * @return Person[]
     */
    public function meet($persons) {
        $femalePersons = [];

        foreach ($persons as &$person) {
            if(strtolower($person->getGender()) == self::GENDER_FEMALE) {
                $femalePersons[] = $person;
            }
        }

        return $femalePersons;
    }
}