<?php

require 'logger.php';
use \DesignPatterns\Decorator\Example\Logger as Example;

// This is how it was usually done, you know..
$log = new Example\Logger('User just logged in');
 
// However, we just realized that we need to log message in a special way..
// But we don't want to modify Logger class, so let's initialize Decorator
// that knows to do the stuff we want like we want
$emailLogger  = new Example\EmailLogger( $log );
 
// ..and now we can use $emailLogger just like we used $log before
// but the result will be different
$emailLogger->log();

echo 'Following message was sent by email: ' . $emailLogger->getMessage();
