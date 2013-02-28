<?php

require 'car.php';
use \DesignPatterns\State\Example\Car as Example;

class CarStateTest extends PHPUnit_Framework_TestCase
{
  public function testItCanCreateACarWithInitialColor() {
    $car = new Example\Car(new Example\RedBrush);
    $this->assertEquals('Red', $car->getCurrentColor());
  }

  public function testItCanRepaintFromRedToBlack() {
    $car = new Example\Car(new Example\RedBrush);
    $car->repaint();
    $this->assertEquals('Black', $car->getCurrentColor());
  }

  public function testItCanRepaintFromBlackToRed() {
    $car = new Example\Car(new Example\BlackBrush);
    $car->repaint();
    $this->assertEquals('Red', $car->getCurrentColor());
  }

}
