<?php

namespace App\StatePattern\States;

use App\StatePattern\OrderContext;
use App\StatePattern\Concerns\Shops;
use App\StatePattern\Concerns\ChecksOut;

class ShippingState extends OrderState {
    use Shops;

    // public function shop(OrderContext $context)
    // {
    //     $context->setState(new ShoppingState);

    //     return "Going from SHIPPING to SHOPPING.";
    // }
}