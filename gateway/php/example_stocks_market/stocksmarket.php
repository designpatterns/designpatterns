<?php

interface IStocksMarket{
		public function buyStock($stockSign);
}

class NasdaqGateway implements IStocksMarket{
	
	// in reallife, you might pass your account identity to the constructor
	public function __construct(){
		//  include alot of messy code regarding the NASDAQ API
	}
	
	public function buyStock($stockSign){
		// using GET/POST sending the request to NASDAQ API.
		// return its answer, we will simulate it:
		
		//simulation of respond: 
		return 'you purchased '. $stockSign .' stock';
		// or throw exception
	}
}

//another gateway
class SPX500Gateway implements IStocksMarket{
	
	public function __construct(){}
	
	public function buyStock($stockSign){
		return 'you purchased '. $stockSign .' stock';
	}
}



class Market {
		
	private $marketGateway;
	
	public function __construct(IStocksMarket $_marketGateway){
		$this->setGateway($_marketGateway);
	}
	
	public function setGateway(IStocksMarket $_marketGateway){
		$this->marketGateway = $_marketGateway;
	}
	
	public function buyStock($stockSign){
		return $this->marketGateway->buyStock($stockSign);
	}
}

?>
