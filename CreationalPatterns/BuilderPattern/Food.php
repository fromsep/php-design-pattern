<?php
namespace PHPDesignPatterns\CreationalPatterns\BuilderPattern;

interface Food
{
    public function getName();

    public function getPacking();

    public function getPrice();
}