<?php

require 'authentication.php';
use \DesignPatterns\Observer\Example\Authentication as Example;

class AuthenticationTest extends PHPUnit_Framework_TestCase
{
  public function testObserversAreNotNotifiedWhenInitialized() {
    $spyObserver = new Example\AuthSpyObserver();
    $messagerObserver = new Example\AuthMessagerObserver();

    $this->assertEquals(false, $spyObserver->wasNotified());
    $this->assertEquals(false, $messagerObserver->wasNotified());
  }

  public function testHostNotifiesObservers() {
    $spyObserver = new Example\AuthSpyObserver();
    $messagerObserver = new Example\AuthMessagerObserver();

    $auth = new Example\Auth();
    $auth->attach( $spyObserver );
    $auth->attach( $messagerObserver );
    $auth->login('foo', 'bar'); // if success - it will notify, else nothing will happen

    $this->assertEquals(true, $spyObserver->wasNotified());
    $this->assertEquals(true, $messagerObserver->wasNotified());
  }

}

