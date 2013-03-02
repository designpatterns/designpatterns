<?php
Interface IAccount {
	function getBalance();
}

// special exception for testing purpose
class AccountException extends Exception{}

class AccountProxy implements IAccount
{
	private $realAccount;
 
	public function getBalance()
	{	
		$this->realAccount=new Account();
		return $this->realAccount->getBalance();	
	}
 
	public function login($username,$password)
	{
		//simulate login
		if($username == 'designman' && $password=='batman'){
			return $this->getBalance();
		} else {
			throw new AccountException('Wrond details');
		}
	}
}

class Account implements IAccount
{		
	public function getBalance()
	{
		return '1600 USD';
	}
}



class Client
{
	private $proxy;
	private $username;
	private $password;
 
	public function __construct($username,$password)
	{
		$this->username=$username;
		$this->password=$password;
		$this->proxy=new AccountProxy();
	}
 
	public function getMyAccountBalance()
	{
			return $this->proxy->login($this->username,$this->password);
	}
}



?>
