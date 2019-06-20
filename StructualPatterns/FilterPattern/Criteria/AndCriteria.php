<?php
namespace PHPDesignPatterns\StructualPatterns\FilterPattern\Criteria;


use PHPDesignPatterns\StructualPatterns\FilterPattern\Person;

class AndCriteria implements ICriteria
{
    /**
     * @var ICriteria
     */
    private $firstCriteria;
    /**
     * @var ICriteria
     */
    private $nextCriteria;

    public function __construct(ICriteria $firstCriteria, ICriteria $nextCriteria) {
        $this->firstCriteria = $firstCriteria;
        $this->nextCriteria  = $nextCriteria;
    }

    /**
     * @param Person[] $persons
     * @return Person[]
     */
    public function meet($persons) {
        $firstFilteredPersons = $this->firstCriteria->meet($persons);
        return $this->nextCriteria->meet($firstFilteredPersons);
    }
}