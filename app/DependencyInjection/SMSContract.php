<?php

namespace App\DependencyInjection;

interface SMSContract {
    /** 
     * This is usually a great place for DocBlocks
     */
    public function send(string $number, string $text);
}