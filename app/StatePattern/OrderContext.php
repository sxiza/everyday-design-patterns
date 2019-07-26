<?php

namespace App\StatePattern;

use App\StatePattern\States\ShoppingState;
use App\StatePattern\States\OrderState;
use Cache;

class OrderContext {
    protected $state;
    protected $defaultState = ShoppingState::class;

    public function __construct()
    {
        // Set the default state
        $this->determineState();
    }

    public function setState(OrderState $state)
    {
        $this->state = $state;
        Cache::put('currentState', get_class($state), 3000);

        return $this;
    }

    public function moveCart($move)
    {
        if(is_callable([$this->state, $move]))
            return $this->state->$move($this);
    }

    protected function determineState()
    {
        $stateClass = Cache::get('currentState');

        if ($stateClass)
        {
            $this->setState(new $stateClass);
        }
        else
        {
            $this->setState(new $this->defaultState);
        }
    }
}