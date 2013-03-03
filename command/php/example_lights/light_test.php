<?php

require_once 'light.php';

class LightTest extends PHPUnit_Framework_TestCase {

	public function testLight() {
		
		$lamp = new Light();
		$switchUp = new FlipUpCommand($lamp);
		$switchDown = new FlipDownCommand($lamp);
		
		$s = new Switcher();
		
		$this->assertEquals('The light is off', $s->storeAndExecute($switchDown));
		$this->assertEquals('The light is on', $s->storeAndExecute($switchUp));
		
	}
}
