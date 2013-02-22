<?
//all the car classes somewhere in the "cars" folder & namespace
	class mercedes {
		public function __construct(){
			echo 'new Mercedes car created';
		}
	}

	class bmw{
		public function __construct(){
			echo 'new BMW car created';
		}
	}
	class ferari{
		public function __construct(){
			echo 'new Ferari car created';
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
        throw new Exception ('this car not exist');
        
        return new $name;
  }
}


try {
    $myBmw = CarsFactory::create('bmw');
    
    //will throw exception since this car not exists
    //$myBmw = CarsFactory::create('susita');
} catch (Exception $e){
         echo $e->getMessage();
}