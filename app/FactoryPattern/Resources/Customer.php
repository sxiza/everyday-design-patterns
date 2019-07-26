<?php

namespace App\FactoryPattern\Resources;

abstract class Customer {
    protected $name;
    protected $surname;

    abstract public function getFullName();
}