<?php
namespace Pen; 
class Pen extends Product
{
    public $ink_color;
    public $material;
    public $brand;
    public function __construct($name, $category, $price, $discount,$brand, $ink_color, $material)
    {
    	parent::__construct($name, $category, $price, $discount);
        $this->brand = $brand;
        $this->ink_color = $ink_color;
        $this->material = $material;     
    } 
    public function getWrite(){
        echo "я пишу! чернила - $this->ink_color.";
    }
    public function changeColor($ink_color)
    {
        $this->ink_color = $ink_color;
    }
}