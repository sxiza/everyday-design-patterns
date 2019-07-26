<?php

namespace App\FactoryPattern\Resources;

class AmazonCustomer extends Customer {
    public function __construct(array $data)
    {
        $this->name = $data['first_name'] ?? $data['name'];
        $this->surname = $data['last_name'] ?? $data['surname'];
    }

    public function getFullName()
    {
        return $this->name . " " . $this->surname;
    }
}