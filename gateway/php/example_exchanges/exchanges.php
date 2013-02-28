<?php namespace DesignPatterns\State\Example\Exchanges;

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
  private $bet = array();

  function placeBet( $bet = array() ) {
    // send request to ExchangeX API
    // and save it in local property
    $this->bet = $bet;
  }
  function retrieveLastBet() {
    return $this->bet;
  }
  function retrieveFunds() {
    // send request to ExchangeX API and return response..
    return -110.98;
  }
}
// Just for a better example let's define second Exchange Gateway
class ExchangeYGateway implements ExchangeInterface {
  private $bet = array();

  function placeBet( $bet = array() ) {
    // send request to ExchangeY API
    // and save it in local property
    $this->bet = $bet;
  }
  function retrieveLastBet() {
    return $this->bet;
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

  function retrieveLastBet() {
    return $this->gateway->retrieveLastBet();
  }

  function retrieveFunds() {
    return $this->gateway->retrieveFunds();
  }
}
