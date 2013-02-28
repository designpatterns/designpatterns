<?php

require 'car.php';
use \DesignPatterns\State\Example\Car as Example;

// Initialize car with Red Brush
$car = new Example\Car(new Example\RedBrush);

echo 'Initial car color: ' . $car->getCurrentColor() . "\n"; // Red

// Repaint car (Red Brush should know which brush should be used next)
$car->repaint();

echo 'Color after repaint: ' . $car->getCurrentColor(); // Black
