<?php

require 'turnstile.php';
use \DesignPatterns\State\Example\Turnstile as Example;

$turnstile = new Example\TurnStile(new Example\LockedState);

// Locked
echo 'The turnstile on ' . $turnstile->getCurrentState() . " right now\n";

$turnstile->insertCoin();

// Unlocked
echo 'The turnstile on ' . $turnstile->getCurrentState() . " right now\n";

$turnstile->rotateStile();

// Locked
echo 'The turnstile on ' . $turnstile->getCurrentState() . " right now\n";
