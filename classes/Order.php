<?php
namespace Order;
class Order extends Basket
{
    public $item;

    public function printOrder(Basket $bas)
    {
    	$this-> item = $bas;
        echo "Ваш заказ: ...";
    }
}
