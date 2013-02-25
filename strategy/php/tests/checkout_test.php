<?php

require 'examples/checkout.php';
use \DesignPatterns\State\Examples\Checkout as Example;

class CheckoutStrategiesTest extends PHPUnit_Framework_TestCase
{
  public function testEuropeanTaxesCalculator() {
    $price = 100;
    $this->assertEquals(20, Example\EuropePricingStrategy::calculateTaxes($price));
  }

  public function testVipDiscountCalculator() {
    $price = 100;
    $this->assertEquals(-10, Example\VipPricingStrategy::negativeDiscount($price));
  }

  public function testCheckoutCanUseStrategies() {
    $price = 100;
    $grandPrice = Example\Checkout::calculate($price,
                                      new Example\EuropePricingStrategy,
                                      new Example\VipPricingStrategy);
    $this->assertEquals(110, $grandPrice);
  }

}

