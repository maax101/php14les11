<?php 
namespace PRODUCTS;
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