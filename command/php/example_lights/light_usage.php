<?php
require 'light.php';

$lamp = new Light();
$switchUp = new FlipUpCommand($lamp);
$switchDown = new FlipDownCommand($lamp);

$s = new Switcher();

$case = "off";

if($case == "on")
 echo $s->storeAndExecute($switchUp);
else
 echo $s->storeAndExecute($switchDown);