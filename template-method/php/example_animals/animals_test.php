<?php

require 'animals.php';
use \DesignPatterns\TemplateMethod\Example\Animals as Example;

class AnimalsTest extends PHPUnit_Framework_TestCase
{
  public function testLionSoundsLikeALion() {
    $lion = new Example\Lion();
    $this->assertEquals('Roar', $lion->sound());
  }

  public function testDogSoundsLikeADog() {
    $dog = new Example\Dog();
    $this->assertEquals('Woof', $dog->sound());
  }

  public function testLionAndDogEatMeat() {
    $lion = new Example\Lion();
    $dog = new Example\Dog();

    $this->assertEquals('Meat', $lion->eat());
    $this->assertEquals('Meat', $dog->eat());
  }
}
