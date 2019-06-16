<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 2019/6/16
 * Time: 23:32
 */
include "./Shape/Shape.php";
include "./Shape/Circle.php";
include "./Shape/Square.php";
include "./Shape/Rectangle.php";

class ShapeFactory
{
    public function getShape($shapeType) {
        if($shapeType == 'Circle') {
            return new Circle();
        }
        if($shapeType == 'Square') {
            return new Square();
        }
        if($shapeType == 'Rectangle') {
            return new Rectangle();
        }
        return NULL;
    }
}