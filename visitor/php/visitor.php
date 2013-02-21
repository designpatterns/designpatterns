<?php

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
    echo 'saving log in a default way, you know.. painting it on the wall';
    echo "..btw the message is {$this->message}";
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
}

// And now we can define the real Visitors who does stuff
// in a different way rather than old good Logger
class EmailLogger extends LoggerVisitor implements ILogger {
  protected $message;

  public function log() {
    echo "sending '{$this->message}' by email";
  }
}
// Let's even add another Visitor that logs a message by saving it in database
class DBLogger extends LoggerVisitor implements ILogger {
  protected $message;

  public function log() {
    echo "saving '{$this->message}' in database";
  }
}


////////////
// Usage
//


// This is how it was usually done, you know..
$log = new Logger('this text should be logged');

// However, we just realized that we need to log message in a special way..
// But we don't want to modify Logger class, so let's initialize Visitor
// that knows to do the stuff we want like we want
$emailLogger  = new EmailLogger();

// Grant access to Visitor ($emailLogger) to enhance functionality of $log
$log->accept( $emailLogger );

// ..and now we can use $emailLogger just like we used $log before
// but the result will be different. Nice hacking, no?:)
$emailLogger->log();


// In conclusion I think Visitor pattern is more a Hack rather than way to
// structure classes relationship in a daily basis.. What do you think?
