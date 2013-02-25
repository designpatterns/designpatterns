<?php

require 'logger.php';
use \DesignPatterns\Visitor\Examples\Logger as Example;

// This is how it was usually done, you know..
$log = new Example\Logger('System Initialized');

// However, we just realized that we need to log message in a special way..
// But we don't want to modify Logger class, so let's initialize Visitor
// that knows to do the stuff we want like we want
$emailLogger  = new Example\EmailLogger();

// Grant access to Visitor ($emailLogger) to enhance functionality of $log
$log->accept( $emailLogger );

// ..and now we can use $emailLogger just like we used $log before
// but the result will be different. Nice hacking, no?:)
$emailLogger->log();
echo 'EmailLogger just sent an email with message: ' . $emailLogger->getMessage();
