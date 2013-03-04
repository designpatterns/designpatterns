<?php

require 'cart.php';

class CartTest extends PHPUnit_Framework_TestCase
{
  public function testFactoryReturnsAnObject() {
    $car = CarFactory::create('carThatDoesNotExist');
    $this->assertEquals(0, $car->getPrice());
  }
}
