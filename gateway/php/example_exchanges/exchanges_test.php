<?php

require 'exchanges.php';
use \DesignPatterns\State\Example\Exchanges as Example;

class ExchangesGatewayTest extends PHPUnit_Framework_TestCase
{
  public function testExchangeXCanPlaceABet() {
    $exchangeX = new Example\Exchange( new Example\ExchangeXGateway );
    $exchangeX->placeBet(array(
      'market_id'     => 11239,
      'selection_id'  => 2,
      'price'         => 3.1,
      'size'          => 35,
      'type'          => 'B'
    ));
    $lastBet = $exchangeX->retrieveLastBet();
    $this->assertEquals(11239, $lastBet['market_id']);
  }

  public function testExchangeXCanRetrieveFunds() {
    $exchangeX = new Example\Exchange( new Example\ExchangeXGateway );
    $this->assertEquals(-110.98, $exchangeX->retrieveFunds());
  }

  public function testExchangeYCanPlaceABet() {
    $exchangeY = new Example\Exchange( new Example\ExchangeYGateway );
    $exchangeY->placeBet(array(
      'market_id'     => 1982,
      'selection_id'  => 6,
      'price'         => 3.0,
      'size'          => 10,
      'type'          => 'L'
    ));
    $lastBet = $exchangeY->retrieveLastBet();
    $this->assertEquals(1982, $lastBet['market_id']);
  }

  public function testExchangeYCanRetrieveFunds() {
    $exchangeX = new Example\Exchange( new Example\ExchangeYGateway );
    $this->assertEquals(-58.98, $exchangeX->retrieveFunds());
  }

}
