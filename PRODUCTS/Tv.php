<?php 
namespace PRODUCTS;
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
        echo $this->size;
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