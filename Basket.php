<?php 
namespace lesson3_3;
class Basket extends Product;
{
	public $item[];
	public $summary_price;
	public $quantity;
	public function getPosition()
	{
		list($name, $price, $quantity) = $item;
	}
	public function getSummary();
	public function unsetItem();
	public function getDiscount();
	function setOrder ($className)
	{
	    $className = 'Order.php';
	}
	spl_autoload_register('setOrder');

}


 ?>