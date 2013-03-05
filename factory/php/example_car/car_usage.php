<?php
require_once "car.php";

try {
    $myCar = CarsFactory::create('bmw');
    echo $myCar->getDetails();
    
    //will throw exception since this car not exists
    //$myBmw = CarsFactory::create('susita');
} catch (CarException $e){
         echo $e->getMessage();
}
?>
