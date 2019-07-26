<?php

namespace App\StatePattern\Concerns;

use App\StatePattern\States\ShoppingState;
use App\StatePattern\OrderContext;

trait Shops
{
    public function shop(OrderContext $context)
    {
        $context->setState(new ShoppingState);

        return "Going from ". strtoupper((new \ReflectionClass($this))->getShortName()) ." to SHOPPING.";
    }
}