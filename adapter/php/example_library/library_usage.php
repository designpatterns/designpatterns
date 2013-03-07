<?php
require "library.php";

$book = new OldBooksAdapter(new OldBook());
$library = new newBooksLibrary();
echo $library->acceptBook($book);

?>