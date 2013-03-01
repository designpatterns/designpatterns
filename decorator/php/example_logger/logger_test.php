<?php

require 'logger.php';
use \DesignPatterns\Decorator\Example\Logger as Example;

class LoggerDecoratorTest extends PHPUnit_Framework_TestCase
{
  public function testEmailDecoratorGetsTheLogMessage() {
    $message = 'this text should be logged';

    $log = new Example\Logger( $message );
    $emailLogger  = new Example\EmailLogger( $log );
    $this->assertEquals( $message, $emailLogger->getMessage() );
  }
}
