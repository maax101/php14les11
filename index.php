<?php  	
function myClasses ($className)
{
    $filePath = './PRODUCTS/' .$className. '.php';
    if (file_exists($filePath)){
        include "$filePath";
    }
}
spl_autoload_register('myClasses');
$mazda = new Car('mx5','grey','sportback');

