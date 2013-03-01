<?php namespace DesignPatterns\Visitor\Examples\Logger;

/*
 * Visitor Pattern in example with Logger class
 * For more details on pattern: http://en.wikipedia.org/wiki/Visitor_pattern
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

  // Nah OK, we will accept visitors, I don't care.. it's easier then modifying
  // this class..
  public function accept(IVisitor $visitor) {
    $visitor->visit( $this );
  }
}


// General interface for all Visitors (hope you don't have many of them..)
interface IVisitor {
  function visit( $host );
}

// Let's define generic logic for Logger Visitors when they visit their Host
abstract class LoggerVisitor implements IVisitor {
  // Provide all logic that has to be done for Logger Visitor when it visits 
  // the main Logger class
  public function visit( $host ) {
    // we need at least message..
    $this->message = $host->getMessage();
  }

  public function getMessage() {
    return $this->message;
  }
}

// And now we can define the real Visitors who does stuff
// in a different way rather than old good Logger
class EmailLogger extends LoggerVisitor implements ILogger {
  protected $message;

  public function log() {
    // sending $this->message by email
  }
}
// Let's even add another Visitor that logs a message by saving it in database
class DBLogger extends LoggerVisitor implements ILogger {
  protected $message;

  public function log() {
    // saving $this->message in database
  }
}

// In conclusion I think Visitor pattern is more a Hack rather than way to
// structure classes relationship in a daily basis..
