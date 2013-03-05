<?php

require 'cart.php';

$cart = array(
  CarFactory::create('Bmw'),
  CarFactory::create('xyzwtf')
);

foreach( $cart as $car):
  $totalPrice += $car->getPrice();
endforeach;

echo "The total price for all the cars found in Cart is: $totalPrice";
