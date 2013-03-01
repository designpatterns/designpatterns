<?php

$markets = array(
	'nasdaq' => new NasdaqGateway(),
	'spx500' => new SPX500Gateway(),
);


$market = new Market($markets['nasdaq']);
echo $market->buyStock('GOOG');

echo '<br>';

$market->setGateway($markets['spx500']);
echo $market->buyStock('AMZN');