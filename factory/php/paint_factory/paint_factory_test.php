<?php

require_once 'paint_factory.php';

class BMWFactoryTest extends PHPUnit_Framework_TestCase {

	public function testCreate() {
		$this->assertEquals('painted to black', BMWFactory::create('black'));
		$this->assertEquals('painted to red', BMWFactory::create('red'));
	}
}
