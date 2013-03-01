<?php namespace DesignPatterns\Decorator\Example\Logger;
 
/*
 * Decorator Pattern in example with Logger class
 * For more details on pattern: http://en.wikipedia.org/wiki/Decorator_pattern
 */
 
////////////////////////////////////////
// Classes and Interfaces declaration
//
 
interface ILogger {
  // don't you have this method? Huh! You're not logger then..
  function log();
}
 
// This is our basic 10years old Logger class, working like a charm
// even now. However it should do a bit more but, well, nobody want to modify
// it.. crap!
class Logger implements ILogger {
  private $message;
 
  public function __construct($message) {
    $this->message = $message;
  }
 
  public function getMessage() {
    return $this->message;
  }
 
  public function log() {
    // saving $this->message in a default way, you know..
  }
 
}
 
// Grab knowledge from Host and pass it to decorators in this Abstract class
abstract class LoggerDecorator {
  protected $host;
  protected $message;
 
  function __construct( ILogger $host ) {
    $this->host = $host;
    $this->message = $this->host->getMessage();
  }

  function getMessage() {
    return $this->message;
  }
}
 
// Define Email Logger as a Decorator for Logger
class EmailLogger extends LoggerDecorator implements ILogger {
  public function log() {
    // sending $this->message by email
  }
}
 
// Conclusion
// I'm not sure if Decorator pattern fits here perfectly, but it's way lighter 
// than Visitor pattern in this situation
