<?
//interface for a car
interface Car {
	public function getDetails();
}

//Exception class so the exception can be tested
class CarException extends Exception{}

//all the car classes somewhere in the "cars" folder & namespace
	class mercedes implements Car{
		public function getDetails(){
			return 'new Mercedes car created';
		}
	}

	class bmw implements Car{
		public function getDetails(){
			return 'new BMW car created';
		}
	}
	class ferari implements Car{
		public function getDetails(){
			return 'new Ferari car created';
		}
	}	

//now how we create a car? if in the future we will change some car, or create other types of cars, trucks,
// all we have to do is change the factory.
class CarsFactory
{
  public static function create( $name )
  {
     // by the cars name, you may include the correct file, ot autoload it.
     if(!class_exists($name))
        throw new CarException ('this car not exist');
        
     	$car = new $name;
        return $car->getDetails();
  }
}


try {
    $myCar = CarsFactory::create('bmw');
    echo $myCar;
    
    //will throw exception since this car not exists
    //$myBmw = CarsFactory::create('susita');
} catch (CarException $e){
         echo $e->getMessage();
}