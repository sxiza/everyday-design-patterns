<?php

namespace App\StatePattern\States;

use App\StatePattern\OrderContext;

class ShoppingState extends OrderState {
    public function shop(OrderContext $context)
    {
        $context->setState(new ShoppingState);

        return "Going from SHOPPING to SHOPPING.";
    }

    public function checkout(OrderContext $context)
    {
        $context->setState(new CheckoutState);

        return "Going from SHOPPING to CHECKOUT.";
    }
}