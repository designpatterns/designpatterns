<?
require_once "car_paint.php";

//besides color, you can pass array with many options
$myBlackBMW = BMWFactory::create('black');
echo $myBlackBMW;