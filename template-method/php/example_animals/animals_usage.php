<?php

require 'animals.php';
use \DesignPatterns\TemplateMethod\Example\Animals as Example;

$lion = new Example\Lion();
$dog = new Example\Dog();

echo 'The lion says: ' . $lion->sound() . "\n";
echo 'The dog says: ' . $dog->sound() . "\n";

echo 'The lion eats: ' . $lion->eat() . "\n";
echo 'The dog eats: ' . $dog->eat() . "\n";
