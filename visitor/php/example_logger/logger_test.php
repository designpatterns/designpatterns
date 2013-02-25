<?php

require 'logger.php';
use \DesignPatterns\Visitor\Examples\Logger as Example;

class LoggerVisitorTest extends PHPUnit_Framework_TestCase
{
  public function testVisitorHasAccessToLoggerMessage() {
    $message = 'User just logged in';

    $log = new Example\Logger( $message );
    $emailLogger  = new Example\EmailLogger();
    $log->accept( $emailLogger );

    $this->assertEquals( $message, $emailLogger->getMessage() );
  }

}
