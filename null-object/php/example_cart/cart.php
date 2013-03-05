<?php

interface Car {
  public function getPrice();
  public function getImage();
}

class Bmw implements Car{
  public function getPrice() {
    return 200000;
  }
  public function getImage() {
    return '/path/to/bmw.jpg';
  }
}
class NullCar implements Car{
  public function getPrice() {
    return 0;
  }
  public function getImage() {
    return '/path/to/blank.jpg';
  }
}

class CarFactory {
  public static function create( $name ) {
    if( class_exists($name) )
      return new $name;
    else
      return new NullCar;
  }
}
