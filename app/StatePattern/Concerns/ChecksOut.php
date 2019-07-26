<?php

namespace App\StatePattern\Concerns;

use App\StatePattern\States\CheckoutState;
use App\StatePattern\OrderContext;

trait ChecksOut
{
    public function checkout(OrderContext $context)
    {
        $context->setState(new CheckoutState);

        return "Going from ". strtoupper((new \ReflectionClass($this))->getShortName())  ." to CHECKOUT.";
    }
}