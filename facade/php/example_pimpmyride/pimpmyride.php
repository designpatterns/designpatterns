<?php

class PimpMyRide {
	
	private $car;
	
	public function __construct(Car $car){
		$this->car = $car;
		
		// lots of private clean functions do their complex job without the client knows!
		$this->paint();
		$this->setStereoSystem();
		$this->setHp();
	}
	
	private function paint(){
		$this->car->color = 'black';
	}
	
	private function setStereoSystem(){
		$this->car->stereoSystem = 'supercool stereo system';
	}

	private function setHP(){
		$this->car->HP = 100;
	}
	
	public function showMeTheCar(){
		return 'The new car is '. $this->car->color .', with '. $this->car->stereoSystem .' upgraded to '. $this->car->HP .' HP';
	}
	
}


class Car {
	public $color;
	public $stereoSystem;
	public $HP;
}

