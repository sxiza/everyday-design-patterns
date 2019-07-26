<?php

namespace App\DependencyInjection;

class NexmoService implements SMSContract {
    protected $prefix = "From NEXMO: ";

    public function send(string $number, string $text)
    {
        return $this->prefix . "\nto:" . $number . "\ntext:" . $text;
    }
}