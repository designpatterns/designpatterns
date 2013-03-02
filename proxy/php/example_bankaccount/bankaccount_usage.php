<?php

require 'bankaccount.php';
$client = new Client('designman','batman');
$balance = $client->getMyAccountBalance();
echo $balance;