<?php
namespace Basket;
class Basket
{
    //какой-то продукт, добавленный в корзину
    public $pos;
    public $summary_price;
    public $quantity = 3;

    //получаем продукт

    public function getPosition(Product $name)
    {
        $this->pos[] = $name;
        foreach ($this->pos as $value) {
            $res = $value;
            print_r($res);
        }
    }
    public function getSummary($res, $quantity)
    {
        $this->summary_price = $res->price * $quantity;

    }
    public function unsetItem()
    {

    }
    public function getDiscount()
    {

    }
    public function setOrder()
    {

    }
}
