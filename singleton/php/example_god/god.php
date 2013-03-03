<?php
//singleton pattern

class God {
	
	//will hold the instance
	private static $instance;

	//the constructor is private and will run only once by getInstance method 
	private function __construct(){
		echo "i created!";
	}

	//if the instance not created, it will create it (run the constructor),
	//and asign it to the $instance property
	// if $instance property already exist it will return it, so the constructor wont run again
	
	public static function getInstance(){
		if(!self::$instance){
			self::$instance = new God;
		}	
	return self::$instance;
	}
}

$god = God::getInstance();

//will not run the constructor because its alrady created
$god = God::getInstance();
