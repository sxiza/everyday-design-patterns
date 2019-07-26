<?php

namespace App\DependencyInjection;

class TwilioService implements SMSContract {
    protected $prefix = "From TWILIO: ";

    public function send(string $number, string $text)
    {
        return $this->prefix . "\nto:" . $number . "\ntext:" . $text;
    }
}