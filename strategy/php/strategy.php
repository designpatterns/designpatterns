<?php

/*
 * Strategy Pattern in example with Pricing Calculations
 * For more details on pattern: http://en.wikipedia.org/wiki/Strategy_pattern
 */
 
////////////////////////////////////////
// Classes and Interfaces declaration
//

// Let's first define interfaces for all Strategies we will have..
interface RegionPricingStrategy {
  function calculateTaxes($price);
}
interface DiscountPricingStrategy {
  function negativeDiscount($price);
}

// Now let's actually create Strategies with their own special logic..
// So, let's say we know what Taxes algorithm is applied to all products
// in Europe and then we can describe it in this Strategy
class EuropePricingStrategy implements RegionPricingStrategy {
  public function calculateTaxes($price) {
    return $price * 20 / 100;
  }
}
// Let's add strategy that contains the logic required to calculate the
// discount we subtract from the given price for VIP clients
class VipPricingStrategy implements DiscountPricingStrategy {
  public function negativeDiscount($price) {
    return $price * 10 / 100 * -1;
  }
}

// Here is example of a Class (it could be ANYTHING, even function) that
// instead of containing IFs conditions just passes these calculations
// to the Strategies we provide to it every time we execute calculate()
// static method
class Checkout {

  function calculate($price, RegionPricingStrategy $countryStrategy,
                           DiscountPricingStrategy $discountStrategy) {
    $grandPrice = $price;
    $grandPrice += $discountStrategy->negativeDiscount($price);
    $grandPrice += $countryStrategy->calculateTaxes($price);
    return $grandPrice;
  }

}


////////////
// Usage
//
$price = 100;
// Of course instead of Europe and VIP we could add more strategies and mix
// them up without touching the Checkout class itself - beautiful!
$grandPrice = Checkout::calculate($price, new EuropePricingStrategy(),
                                          new VipPricingStrategy() );

// Returns: The total price is 110 instead of 100
echo "The total price is $grandPrice instead of $price";
