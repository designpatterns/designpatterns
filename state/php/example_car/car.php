<?php namespace DesignPatterns\State\Example\Car;

/*
 * State Pattern in example with Car color Brush
 * For more details on pattern: http://en.wikipedia.org/wiki/State_pattern
 */
 
////////////////////////////////////////
// Classes and Interfaces declaration
//

// In this example we will use 2 Brushes to paint 1 Car Object
// And so that, Red brush will know to call Black brush if repaint()
// method is invoked

// Our brushes need to know it's own color
// and logic required to apply another brush on Car object
interface CarBrush {
  function getColor();
  function repaint(Car $car);
}
// Notice repaint(:Car) method which invokes another brush object on specified
// Car object
class RedBrush implements CarBrush {
  function getColor() {
    return 'Red';
  }
  function repaint(Car $car) {
    $car->paintWith(new BlackBrush);
  }
}
// Same for Black brush..
class BlackBrush implements CarBrush {
  function getColor() {
    return 'Black';
  }
  function repaint(Car $car) {
    $car->paintWith(new RedBrush);
  }
}

// And of course we need out Car prototype, which keeps currently applied
// color brush in private property $currentBrush
class Car {
  private $currentBrush;

  function __construct( CarBrush $brush) {
    $this->paintWith( $brush );
  }

  function paintWith( CarBrush $brush ) {
    $this->currentBrush = $brush;
  }

  function getCurrentColor() {
    return $this->currentBrush->getColor();
  }

  function repaint() {
    $this->currentBrush->repaint( $this );
  }
}
