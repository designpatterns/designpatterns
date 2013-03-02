<?php

require_once 'bankaccount.php';

class AccountTest extends PHPUnit_Framework_TestCase {

	public function testGetMyAccountBalance() {
		
		$client = new Client('designman','batman');
		$balance = $client->getMyAccountBalance();

		$this->assertEquals('1600 USD', $balance);

		$this->setExpectedException('AccountException');
		$client = new Client('hacker','batman');
		$client->getMyAccountBalance();
	}
}
