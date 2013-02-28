<?php

require 'checkout.php';
use \DesignPatterns\Strategy\Example\Checkout as Example;

// 20
echo 'The taxes amount for a $100 purchase from European client is: '
  . Example\EuropePricingStrategy::calculateTaxes( 100 )
  . "\n";
// -10
echo 'A discount for $100 purchase from a VIP client is: '
  . Example\VipPricingStrategy::negativeDiscount( 100 )
  . "\n";

// 110
echo 'The grand price for a $100 purchase for VIP Client from Europe is: '
  . Example\Checkout::calculate( 100,
                                 new Example\EuropePricingStrategy,
                                 new Example\VipPricingStrategy);
