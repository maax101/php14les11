<?php
//namespace PRODUCTS;
class  Car extends Product {
// данные (свойства):
    public $model;
    public $color;
    public $type;
    // методы:   
  
    public function setPrice($price)
        {
            $this->price = $price;
            parent::getPrice();

        }
        function Car($model, $color, $type) {
        echo $this->model = $model.' - ';
        echo $this->color = $color.', ';
        echo $this->type = $type.', ';
        $this->setPrice('$10000');
       
    }
}
// Создаем объект класса:
$toyota = new Car('Corolla', 'red', 'sedan');
$honda = new Car('Civic', 'green', 'hatchback');

