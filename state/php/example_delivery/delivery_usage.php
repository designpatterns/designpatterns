<?php

require 'delivery.php';
use \DesignPatterns\State\Example\Delivery as Example;

$delivery = new Example\Delivery(new Example\Processing);

// Warehouse
echo 'The package is in ' . $delivery->getCurrentLocation() . " right now\n";

$delivery->goNext();

// On the way
echo 'The package is in ' . $delivery->getCurrentLocation() . " right now\n";

$delivery->goNext();

// Final Destination
echo 'The package is in ' . $delivery->getCurrentLocation() . " right now\n";
