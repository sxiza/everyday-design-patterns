<?php

namespace App\StatePattern\Concerns;

use App\StatePattern\States\ShippingState;
use App\StatePattern\OrderContext;

trait Ships
{
    public function ship(OrderContext $context)
    {
        $context->setState(new ShippingState);

        return "Going from ". strtoupper((new \ReflectionClass($this))->getShortName())  ." to SHIPPING.";
    }
}