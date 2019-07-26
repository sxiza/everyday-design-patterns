<?php

namespace App\StatePattern\States;

use App\StatePattern\OrderContext;

class CheckoutState extends OrderState {
    public function checkout(OrderContext $context)
    {
        $context->setState(new CheckoutState);

        return "Going from CHECKOUT to CHECKOUT.";
    }

    public function ship(OrderContext $context)
    {
        $context->setState(new ShippingState);

        return "Going from CHECKOUT to SHIPPING.";
    }
}