<?php

require_once 'car.php';

class CarsFactoryTest extends PHPUnit_Framework_TestCase {

	public function testCreate() {
		$this->assertInstanceOf('Car', CarsFactory::create('bmw'));
		$this->assertInstanceOf('Car', CarsFactory::create('mercedes'));
		$this->assertInstanceOf('Car', CarsFactory::create('ferari'));

		$this->setExpectedException('CarException');
		CarsFactory::create('susita');
	}
}
