<?php
namespace Car;
class  Car extends Product 
{
    public $model;
    public $color;
    public function __construct($name, $category, $price, $discount, $model, $color)
    {
        parent::__construct($name, $category, $price, $discount);
        $this->model = $model;
        $this->color = $color;
    }
    public function getDrive(){
        echo "я еду!";
    }
    public function getWash(){
        echo "я моюсь!";
    }
    public function getFuel(){
        echo "я на заправке!";
    }   
}
