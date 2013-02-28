<?php

require 'exchanges.php';
use \DesignPatterns\State\Example\Exchanges as Example;

$exchangeX = new Example\Exchange( new Example\ExchangeXGateway );
$exchangeX->placeBet(array(
  'market_id'     => 11239,
  'selection_id'  => 2,
  'price'         => 3.1,
  'size'          => 35,
  'type'          => 'B'
));
$lastBet = $exchangeX->retrieveLastBet();

echo 'The market id of last bet in ExchangeX is ' . $lastBet['market_id'] . "\n";
echo 'Funds in ExchangeX: ' . $exchangeX->retrieveFunds() . "\n";


$exchangeY = new Example\Exchange( new Example\ExchangeYGateway );
$exchangeY->placeBet(array(
  'market_id'     => 1982,
  'selection_id'  => 6,
  'price'         => 3.0,
  'size'          => 10,
  'type'          => 'L'
));
$lastBet = $exchangeY->retrieveLastBet();

echo 'The market id of last bet in ExchangeY is ' . $lastBet['market_id'] . "\n";
echo 'Funds in ExchangeY: ' . $exchangeY->retrieveFunds();
