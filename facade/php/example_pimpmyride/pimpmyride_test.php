<?php

require_once 'pimpmyride.php';

class PMRTest extends PHPUnit_Framework_TestCase {

	public function testPMR() {
		
		$newCar = new PimpMyRide(new Car());

		$this->assertEquals('The new car is black, with supercool stereo system upgraded to 100 HP', $newCar->showMeTheCar());
	}
}
