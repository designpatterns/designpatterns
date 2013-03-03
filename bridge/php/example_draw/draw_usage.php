<?php
require "draw.php"

$shapes = array(
    new CircleShape(1, 3, 7,  new DrawingAPI1()),
    new CircleShape(5, 7, 11, new DrawingAPI2()),
);

foreach ($shapes as $shape) {
    $shape->draw();
}