<?php

class God {
	
	private static $instance;
	
	private $name;
	private $location;
	
	public function __construct(){
		if(!God::$instance)
			God::$instance = $this;
	}
	
	//Hide the properties behind __set & __get so we assign it to the instance
	// also we can write regular getters & setters
	public function __set($key, $value)
    {
       if( property_exists ($this ,$key)){
			 self::$instance->$key = $value;
		} else {
			throw new InvalidArgumentException;
		}
    }
	
	public function __get($key)
   	{
       if( property_exists ($this ,$key)){
			return self::$instance->$key;
		} else {
			throw new InvalidArgumentException;
		}
    }
	
	
}

 
 

