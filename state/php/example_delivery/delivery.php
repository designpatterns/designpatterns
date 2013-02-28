<?php namespace DesignPatterns\State\Example\Delivery;

/*
 * State Pattern in example with Delivery Service
 * For more details on pattern: http://en.wikipedia.org/wiki/State_pattern
 */
 
////////////////////////////////////////
// Classes and Interfaces declaration
//

// Our delivery state knows it's current location and
// it's successor state
interface DeliveryState {
  function goNext(Delivery $delivery);
  function getLocation();
}
// After Warehouse state, there is OnRoute state
class Processing implements DeliveryState {
  function getLocation() {
    return 'Warehouse';
  }
  function goNext(Delivery $delivery) {
    $delivery->setState(new OnRoute);
  }
}
// After OnRoute state, there is AtDestination state
class OnRoute implements DeliveryState {
  function getLocation() {
    return 'On the way';
  }
  function goNext(Delivery $delivery) {
    $delivery->setState(new AtDestination);
  }
}
// And after AtDestination state, there is AtDestination state again,
// so we close the loop on it
class AtDestination implements DeliveryState {
  function getLocation() {
    return 'Final Destination';
  }
  function goNext(Delivery $delivery) {
    $delivery->setState(new AtDestination);
  }
}

// Here everything is pretty easy - a Delivery uses it's
// current state to provide API which allows getting current
// location and moving to next state
class Delivery {
  private $currentState;

  function __construct( DeliveryState $state) {
    $this->setState( $state );
  }

  function getCurrentLocation() {
    return $this->currentState->getLocation();
  }

  function goNext() {
    $this->currentState->goNext( $this );
  }

  function setState( DeliveryState $state ) {
    $this->currentState = $state;
  }
}
