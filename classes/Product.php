<?php
namespace classes;
abstract class Product 
{
    public $name;
    public $category;
    public $price;
    public $discount;

    public function totalPrice($price, $discount)
    {
        $total_price = $price - (($price/100)*$discount);
        return $total_price;
    }
    public function __construct($name, $category, $price, $discount)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->discount = $discount;
    }  
}