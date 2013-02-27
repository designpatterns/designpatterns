<?
require_once "car_factory.php";

try {
    $myCar = CarsFactory::create('bmw');
    echo $myCar;
    
    //will throw exception since this car not exists
    //$myBmw = CarsFactory::create('susita');
} catch (CarException $e){
         echo $e->getMessage();
}
?>