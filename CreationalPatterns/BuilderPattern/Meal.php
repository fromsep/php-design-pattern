<?php
namespace PHPDesignPatterns\CreationalPatterns\BuilderPattern;

class Meal
{
    private  $foodList = [];

    public function addFood(Food $food) {
        $this->foodList[] = $food;
    }

    public function getBill() {
        $bill = 0;
        foreach ($this->foodList as $food) {
            $bill += $food->getPrice();
        }

        return $bill;
    }

    public function showFoodList() {
        foreach ($this->foodList as $food) {
            echo "NAME:{$food->getName()}\t PACKING:{$food->getPacking()->pack()}\t PRICE:{$food->getPrice()}\n";
        }
        echo "BILL ADD:{$this->getBill()}\n";
    }
}