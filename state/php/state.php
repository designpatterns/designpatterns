<?php
// set the interface for out available states
interface CarColorStateInterface {
    public function showColor($context_in);
}
 
 //state for black color
class CarColorStateBlack implements CarColorStateInterface {
    private $count = 0; 
	
    public function showColor($context_in) {
      $title = $context_in->getCar()->getColorState();
      $this->count++;
      $context_in->setColorState(new CarColorStateRed());
      return str_replace('%COLOR%','black',$title);
    }
}

//state for red color, changed only after 2 instances
class CarColorStateRed implements CarColorStateInterface {
    private $count = 0; 
	
    public function showColor($context_in) {
      $title = $context_in->getCar()->getColorState();
      $this->count++;
      if ($this->count > 1) {
        $context_in->setColorState(new CarColorStateBlack()); 
      }
      return str_replace('%COLOR%','red',$title);
    }
}




//the contex, wrapper fot the car class that able to alter the state
class CarContext {
    private $car = NULL;
    private $carColorState = NULL; 
    //bookList is not instantiated at construct time
    public function __construct($car) {
      $this->car = $car;
      $this->setColorState(new CarColorStateRed());
    }
    public function getCarColor() {
      return $this->carColorState->showColor($this);
    }  
    public function getCar() {
      return $this->car;
    }
    public function setColorState($colorState_in) {
      $this->carColorState = $colorState_in;
    }
}


class Car {
    private $colorState;
	
    function __construct($title_in) {
      $this->colorState  = $title_in;
    }

    function getColorState() {
		return $this->colorState;
	}
	
}


$car = new Car('%COLOR% mercedes');
$context = new CarContext($car);

//as mercedes creates one black car for every 2 red cars..
// will create red car
echo "<br>";
echo($context->getCarColor());

//will create red car again because the red state counts for 2 instances and sets the black state
echo('<br>');
echo($context->getCarColor());

// red finished, and setet the black state, witch run once, and sets the red color again..
echo('<br>');
echo($context->getCarColor());

//red color...
echo('<br>');
echo($context->getCarColor());

?>