<?php

require_once 'draw.php';

class DrawTest extends PHPUnit_Framework_TestCase {

	public function testDraw() {
		
		$shape1 = new CircleShape(1, 3, 7,  new DrawingAPI1());
		$this->assertEquals('API1.circle at 1:3 radius 7', $shape1->draw());
		
		
		$shape2 = new CircleShape(5, 7,11,  new DrawingAPI2());
		$this->assertEquals('API2.circle at 5:7 radius 11', $shape2->draw());
	}
}
