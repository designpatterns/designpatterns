<?php
// some old interface with used
interface oldBookInterface {}

//our new interface for our new  books library
interface newBookInterface{  
	function getBookDescription();  
}

//this our old book object we used, cant fit to our new library!
class OldBook implements oldBookInterface{
	
	public function getOldBooksName(){
		return 'Twenty Thousand Leagues Under the Sea';
	}
	
	public function getOldBookAuthor(){
		return 'Jules Verne';
	}
}

// lets wrap it for our new library! with our new interface!
class OldBooksAdapter implements newBookInterface{

	private $oldbook;
	
	public function __construct(oldBookInterface $oldbook){
		$this->oldbook = $oldbook;
	}
	
	public function getBookDescription(){
		return $this->oldbook->getOldBooksName() ." by ". $this->oldbook->getOldBookAuthor();
	}
}

// our new library accepts only new type of books!
class newBooksLibrary {

	private $books= array();
	
	public function acceptBook(newBookInterface $book){
		$this->books[] = $book;
		return $book->getBookDescription();
	}
	
}


?>