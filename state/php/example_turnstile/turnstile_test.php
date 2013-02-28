<?php

require 'turnstile.php';
use \DesignPatterns\State\Example\Turnstile as Example;

class TurnstileStateTest extends PHPUnit_Framework_TestCase
{
  public function testItCanCreateATurnstileWithInitialState() {
    $turnstile = new Example\TurnStile(new Example\LockedState);
    $this->assertEquals('Locked', $turnstile->getCurrentState());
  }

  public function testItCanUnlockTurnstileWithCoin() {
    $turnstile = new Example\Turnstile(new Example\LockedState);
    $turnstile->insertCoin();
    $this->assertEquals('Unlocked', $turnstile->getCurrentState());
  }

  public function testItKeepsTurnstileUnlockedWithMultipleCoins() {
    $turnstile = new Example\Turnstile(new Example\UnlockedState);
    $turnstile->insertCoin();
    $turnstile->insertCoin();
    $this->assertEquals('Unlocked', $turnstile->getCurrentState());
  }

  public function testItLocksTurnstileWhenStileIsRotated() {
    $turnstile = new Example\Turnstile(new Example\UnlockedState);
    $turnstile->rotateStile();
    $this->assertEquals('Locked', $turnstile->getCurrentState());
  }

  public function testItKeepsTurnstileLockedWhenStileIsRotated() {
    $turnstile = new Example\Turnstile(new Example\LockedState);
    $turnstile->rotateStile();
    $this->assertEquals('Locked', $turnstile->getCurrentState());
  }

}
