<?php namespace DesignPatterns\Strategy\Example\Checkout;

/*
 * Strategy Pattern in example with Pricing Calculations
 * For more details on pattern: http://en.wikipedia.org/wiki/Strategy_pattern
 */
 
////////////////////////////////////////
// Classes and Interfaces declaration
//

// Let's first define interfaces for all Strategies we will have..
interface RegionPricingStrategy {
  static function calculateTaxes($price);
}
interface DiscountPricingStrategy {
  static function negativeDiscount($price);
}

// Now let's actually create Strategies with their own special logic..
// So, let's say we know what Taxes algorithm is applied to all products
// in Europe and then we can describe it in this Strategy
class EuropePricingStrategy implements RegionPricingStrategy {
  static public function calculateTaxes($price) {
    return $price * 20 / 100;
  }
}
// Let's add strategy that contains the logic required to calculate the
// discount we subtract from the given price for VIP clients
class VipPricingStrategy implements DiscountPricingStrategy {
  static public function negativeDiscount($price) {
    return $price * 10 / 100 * -1;
  }
}

// Here is example of a Class (it could be ANYTHING, even function) that
// instead of containing IFs conditions just passes these calculations
// to the Strategies we provide to it every time we execute calculate()
// static method
class Checkout {

  static function calculate($price, RegionPricingStrategy $countryStrategy,
                           DiscountPricingStrategy $discountStrategy) {
    $grandPrice = $price;
    $grandPrice += $discountStrategy->negativeDiscount($price);
    $grandPrice += $countryStrategy->calculateTaxes($price);
    return $grandPrice;
  }

}


////////////////////////////////////////////////////////////////////////////
// Usage is demonstrated in ./tests/%FILENAME_WITHOUT_EXTENSION%_test.php
//
