<?php
class  Car extends Product {
// данные (свойства):
    public $model;
    public $color;
    public $type;
    // методы:

    public function getWeight() {
        echo $this->weight.'<br>';
    }
    function setWeight($weight) {
        $this->weight = $weight;
        $this->getWeight();
    }

    function Car($model, $color, $type) {
        echo $this->model = $model.' - ';
        echo $this->color = $color.', ';
        echo $this->type = $type.', ';
        $this->setWeight(1200).'<br>';
    }
}
// Создаем объект класса:
$toyota = new Car('Corolla', 'red', 'sedan');
$honda = new Car('Civic', 'green', 'hatchback');


; 

class Tv extends Product {
// данные (свойства):
    public $brand;
    public $size;
    // методы:
    function Getbrand() {
		echo $this->brand.'<br>';
	}
    function Setbrand($brand) {
		$this->brand = $brand;
		$this->Getbrand();
    }

    public function getSize()
    {
        return $this->size;
    }

     public function setSize($size)
    {
        $this->size = $size;
    }

}
// Создаем объект класса:
$lg = new Tv;
$lg->Setbrand ('LG');
$sony = new Tv;
$sony->Setbrand ('SONY');


class Pen extends Product {
// данные (свойства):
    public $ink_color;
    public $material;
    public $brand;
    // методы:
    function Pen($brand, $ink_color, $material) {
        echo $this->type = $brand.' - ';
        echo $this->color = $material.', ';
        echo $this->ink_color = $ink_color.'.<br/>';
    }
}

// Создаем объект класса:
$bic_pen = new Pen('BIC', 'red', 'plastic');
$parker_pen = new Pen('Parker', 'blue', 'metal');

class Duck extends Product {
// данные (свойства):
    public $name;
    public $sex;
    // методы:
    function Duck($name, $sex) {
                
        echo $this->name = $name.': ';
        echo $this->sex = $sex.'.<br/>';
    }
}

// Создаем объект класса:
$duck1 = new Duck('Donald', 'he is');
$duck2 = new Duck('Duffy', 'she is');

abstract class Product {
// данные (свойства):
    public $category;
    public $price;
    public $availability;
    // методы:
    function Product($category, $price,$availability) {
                
       
    }
}









