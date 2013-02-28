<?php

require 'authentication.php';
use \DesignPatterns\Observer\Example\Authentication as Example;

$spyObserver = new Example\AuthSpyObserver();
$messagerObserver = new Example\AuthMessagerObserver();

echo "Logging in through Auth class..\n";

$auth = new Example\Auth();
$auth->attach( $spyObserver );
$auth->attach( $messagerObserver );
$auth->login('foo', 'bar'); // if success - it will notify, else nothing will happen

if( $spyObserver->wasNotified() ) {
  echo "SpyObserver was notified\n";
}
if( $messagerObserver->wasNotified() ) {
  echo "MessagerObserver was notified\n";
}

