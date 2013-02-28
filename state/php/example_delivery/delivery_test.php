<?php

require 'delivery.php';
use \DesignPatterns\State\Example\Delivery as Example;

class DeliveryStateTest extends PHPUnit_Framework_TestCase
{
  public function testItCanCreateADeliveryWithInitialState() {
    $delivery = new Example\Delivery(new Example\Processing);
    $this->assertEquals('Warehouse', $delivery->getCurrentLocation());
  }

  public function testItCanGoFromProcessingToOnRoute() {
    $delivery = new Example\Delivery(new Example\Processing);
    $delivery->goNext();
    $this->assertEquals('On the way', $delivery->getCurrentLocation());
  }

  public function testItCanGoFromOnRouteToDestination() {
    $delivery = new Example\Delivery(new Example\OnRoute);
    $delivery->goNext();
    $this->assertEquals('Final Destination', $delivery->getCurrentLocation());
  }

  public function testItRemainsAtFinalDestination() {
    $delivery = new Example\Delivery(new Example\AtDestination);
    $delivery->goNext();
    $this->assertEquals('Final Destination', $delivery->getCurrentLocation());
  }
}
