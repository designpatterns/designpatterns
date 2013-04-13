<?php
require 'god.php';


class ExchangesGatewayTest extends PHPUnit_Framework_TestCase
{
	public function testSingularity() {
		$god1 = new God;
		$god2 = new God;
		
		$god1->name = 'will smith';
		$god1->location = 'somewhere in Miami';
		
		$this->assertEquals($god1->name,$god2->name);
		
		$god2->name = 'michael jordan';
		
		$this->assertEquals($god1->name,$god2->name);
	}
}
