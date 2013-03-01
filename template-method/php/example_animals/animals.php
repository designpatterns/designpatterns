<?php namespace DesignPatterns\TemplateMethod\Example\Animals;

abstract class Animal {
  // Every child class will implement this method in their way
  abstract public function sound();

  // Common functionality exists only once - keep it DRY (Don't Repeat Yourself)
  public function eat() {
    return 'Meat';
  }
}

class Lion extends Animal {
  public function sound() {
    return 'Roar';
  }
}

class Dog extends Animal {
  public function sound() {
    return 'Woof';
  }
}
