<?php

require_once 'stocksmarket.php';

class StockTest extends PHPUnit_Framework_TestCase {
	
	private $markets;
	
	protected function setUp() {
		parent::setUp ();
	
		$this->markets = array(
			'nasdaq' => new NasdaqGateway(),
			'spx500' => new SPX500Gateway(),
		);
	}
	
	
	public function testBuyStock() {
		$market = new Market($this->markets['nasdaq']);
		$this->assertEquals('you purchased GOOG stock', $market->buyStock('GOOG'));
		
		$market->setGateway($this->markets['spx500']);
		$this->assertEquals('you purchased AMZN stock', $market->buyStock('AMZN'));
	}
}

