<?php
require_once 'library.php';

class LibraryTest extends PHPUnit_Framework_TestCase {

	public function testLibrary() {
		
		$book = new OldBooksAdapter(new OldBook());
		$library = new newBooksLibrary();
		
		$this->assertEquals('Twenty Thousand Leagues Under the Sea by Jules Verne', $library->acceptBook($book));
	}
}
