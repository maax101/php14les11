<?php
//namespace PRODUCTS;
abstract class Product
{
    public $price;
    public $availability = 'Call to manager.';
    public function getPrice()
        {
            echo $this->price.'<br>';
        }
    abstract public function setPrice($price);
       
    
}

// function myClasses ($className)
// {
//     $filePath = str_replace('\\', DIRECTORY_SEPARATOR, $className) './PRODUCTS/' .$className. '.php';
//     if (file_exists($filePath)){
//         include "$filePath";
//     }
// }
// spl_autoload_register('myClasses');
// spl_autoload_register('myInterfaces');
