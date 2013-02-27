<?
require_once "paint_factory.php";

//besides color, you can pass array with many options
$myBlackBMW = BMWFactory::create('black');
echo $myBlackBMW;