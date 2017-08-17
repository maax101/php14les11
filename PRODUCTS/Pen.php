<?php 
namespace PRODUCTS;
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
