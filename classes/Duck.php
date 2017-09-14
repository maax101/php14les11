<?php 
namespace Duck;
class Duck extends Product
{
    public $name;
    public $sex;
    public function __construct($name, $category, $price, $discount,$name, $sex)
    {
    	parent::__construct($name, $category, $price, $discount);
        $this->name = $name;
        $this->sex = $sex;
    }
    public function swimming(){
        echo "плавание!";
    }
    public function fishihg(){
        echo "рыбалка!";
    }    
}
