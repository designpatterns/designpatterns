<?php namespace DesignPatterns\State\Examples\Authentication;

/*
 * Observer Pattern in example with Authentication system
 * For more details on pattern: http://en.wikipedia.org/wiki/Observer_pattern
 */
 
////////////////////////////////////////
// Classes and Interfaces declaration
//


abstract class Observable {
  private $observers = array();

  function attach(Observer $observer) {
    $this->observers[] = $observer;
  }

  protected function notify( $args = null ) {
    foreach($this->observers as $observer)
      $observer->run( $this, $args );
  }
}

// Sampe Observable class that only has to inherit from Observable
// abstract Class and implement $this->notify() where required
class Auth extends Observable {
  private $username;

  public function login($username = '', $password = '') {
    // Not seriously, but still authentification
    if( $username !== 'foo' || $password !== 'bar') return false;

    // Update our instance knowledge
    $this->username = $username;

    // Let's notify all Observers
    $this->notify();

    return true;
  }

  // An API to knowledge we can share
  public function getUsername() {
    return $this->username;
  }
}


interface Observer {
  function run( Observable $sender, $args );
}
// Implement specific Observer - AuthSpyObserver
class AuthSpyObserver implements Observer {
  private $notified;
  // This method will be run each time Auth Class will decide to notify it
  public function run( Observable $sender, $args ) {
    // now spying after $sender->getUsername() because he just was authenticated
    $this->notified = true;
  }
  public function wasNotified() {
    return $this->notified;
  }
}
// Implement another specific Observer - AuthMessagerObserver
class AuthMessagerObserver implements Observer {
  private $notfied;
  // This method will be run each time Auth Class will decide to notify it
  public function run( Observable $sender, $args ) {
    // sending an email to $sender->getUsername() after successfull authentication
    $this->notified = true;
  }
  public function wasNotified() {
    return $this->notified;
  }
}

////////////////////////////////////////////////////////////////////////////
// Usage is demonstrated in ./tests/%FILENAME_WITHOUT_EXTENSION%_test.php
//

