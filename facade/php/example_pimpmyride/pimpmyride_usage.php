<?php
require "pimpmyride.php";

$newCar = new PimpMyRide(new Car());
echo $newCar->showMeTheCar();