<?php 
var_dump(__NAMESPACE__); 	
function myClasses ($className)
{
    $filePath = './classes/' .$className. '.php';
    if (file_exists($filePath)){
        include "$filePath";
    }
}
spl_autoload_register('myClasses');
$mazda = new Car('Mazda', 'Car', 10000, 10, 'MX5', 'red');
$bas = new Basket;
$bas->getPosition($mazda);
echo '<pre>';
 print_r($bas);
echo $bas->getSummary($mazda, 5);
$ord = new Order;
var_dump($ord);