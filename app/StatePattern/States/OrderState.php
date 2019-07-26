<?php

namespace App\StatePattern\States;

use App\StatePattern\OrderContext;

abstract class OrderState {
    public function shop(OrderContext $context)
    {
        throw new \Exception("Cannot shop here");
    }

    public function checkout(OrderContext $context)
    {
        throw new \Exception("Cannot checkout here");
    }

    public function ship(OrderContext $context)
    {
        throw new \Exception("Cannot ship here");
    }
}