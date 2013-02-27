<?php

require_once 'car_factory.php';

class CarsFactoryTest extends PHPUnit_Framework_TestCase {

	public function testCreate() {
		$this->assertEquals('new BMW car created', CarsFactory::create('bmw'));
		$this->assertEquals('new Mercedes car created', CarsFactory::create('mercedes'));
		$this->assertEquals('new Ferari car created', CarsFactory::create('ferari'));

		$this->setExpectedException('CarException');
		CarsFactory::create('susita');
	}
}
