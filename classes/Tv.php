<?php
namespace Tv; 
class Tv extends Product 
{
    public $model;
    public $size;
    public function __construct($name, $category, $price, $discount,$model, $size)
    {
        parent::__construct($name, $category, $price, $discount);
        $this->model = $model;
        $this->size = $size;
    }
    public function standby(){
        echo "on/of!";
    }
    public function changeChannel($channel)
    {
        $this->channel = $channel;
    }
    public function setTimer($timer)
    {
        $this->timer = $timer;
    }    
}