<?php

/*
 * Gateway Pattern in example with betting exchanges
 */
 
////////////////////////////////////////
// Classes and Interfaces declaration
//

// First, let's define what functionality we require
interface ExchangeInterface {
  function placeBet( $bet = array() );
  function retrieveFunds();
}

// And apply this functionality to all Gateways
// In our case each Gateway contains logic that is required
// to send to and receive data from Betting Exchanges
// to place and retrieve Bets
class ExchangeXGateway implements ExchangeInterface {
  function placeBet( $bet = array() ) {
    // send request to ExchangeX API
    echo "sending a bet to ExchangeX \n";
  }
  function retrieveFunds() {
    // send request to ExchangeX API and return response..
    return -110.98;
  }
}
// Just for a better example let's define second Exchange Gateway
class ExchangeYGateway implements ExchangeInterface {
  function placeBet( $bet = array() ) {
    // send request to ExchangeY API
    echo "sending a bet to ExchangeY \n";
  }
  function retrieveFunds() {
    // send request to ExchangeY API and return response..
    return -58.98;
  }
}

// Finally, our main entry point will redirect all methods calls
// to specified in the construction Gateway
class Exchange implements ExchangeInterface {
  private $gateway;

  function __construct( ExchangeInterface $gateway ) {
    $this->gateway = $gateway;
  }

  function placeBet( $bet = array() ) {
    $this->gateway->placeBet( $bet );
  }

  function retrieveFunds() {
    return $this->gateway->retrieveFunds();
  }
}


////////////
// Usage
//

// Place a bet in ExchangeX
$exchangeX = new Exchange( new ExchangeXGateway );
$exchangeX->placeBet(array(
  'market_id'     => 11239,
  'selection_id'  => 2,
  'price'         => 3.1,
  'size'          => 35,
  'type'          => 'B'
));

// Place another bet in ExchangeY
$exchangeY = new Exchange( new ExchangeYGateway );
$exchangeY->placeBet(array(
  'market_id'     => 1982,
  'selection_id'  => 6,
  'price'         => 3.0,
  'size'          => 10,
  'type'          => 'L'
));

// Just for fun, let's print Funds we have left in both Exchanges
// after trying to catch Arbitrage situations
echo "ExchangeX funds: " . $exchangeX->retrieveFunds() . "\n";
echo "ExchangeY funds: " . $exchangeY->retrieveFunds() . "\n";
