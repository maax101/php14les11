<?php
namespace lesson3_3;

class Order 
{
	public $item = array(100, 10);
	
	public function printOrder($item)
	{
		echo 'Ваш заказ: <br> <ol>'; 
		while (list($price, $quantity) = $item) {
			echo "<li>$item: $price, количество: $quantity</li>";
		}
		echo '</ol>';
	}
}
$my_ord = new Order;
$my_ord->printOrder();
 ?>