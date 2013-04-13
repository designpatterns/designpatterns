<?php
require_once 'god.php';

$god1 = new God;
$god2 = new God;

$god1->name = 'will smith';
$god1->location = 'somewhere in Miami';

//will print 'will smith'
echo $god2->name;

$god2->name = 'michael jordan';

//will print 'micahel jordan
echo $god1->name;