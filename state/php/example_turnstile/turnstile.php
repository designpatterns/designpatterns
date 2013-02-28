<?php namespace DesignPatterns\State\Example\Turnstile;

/*
 * State Pattern in classic example with Turnstile
 * For more details on pattern: http://en.wikipedia.org/wiki/State_pattern
 */
 
////////////////////////////////////////
// Classes and Interfaces declaration
//

// In this example we will insert Coins and Rotate Stile to change 1 Turnstile State

// States need to know their state value and
// because we only have 2 actions - lock and unlock,
// we don't have to implement those methods in each state
abstract class State {
  abstract function getState();
  function lock(Turnstile $turnstile) {
    $turnstile->changeStateTo(new LockedState);
  }
  function unlock(Turnstile $turnstile) {
    $turnstile->changeStateTo(new UnlockedState);
  }
}
// Here everything is simple, every state just knows it's state value
class LockedState extends State {
  function getState() {
    return 'Locked';
  }
}
// Same for Unlocked state..
class UnlockedState extends State {
  function getState() {
    return 'Unlocked';
  }
}

// And of course we need our Turnstile prototype, which keeps currently applied
// state in private property $currentState
class Turnstile {
  private $currentState;

  function __construct( State $state) {
    $this->changeStateTo( $state );
  }

  function changeStateTo( State $state ) {
    $this->currentState = $state;
  }

  function getCurrentState() {
    return $this->currentState->getState();
  }
  // it's simple - Insert a coint - and turnstile unlocks..
  function insertCoin() {
    $this->currentState->unlock( $this );
  }
  // ..Rotate a stile - and Turnstile locks.. correct? good
  function rotateStile() {
    $this->currentState->lock( $this );
  }
}
