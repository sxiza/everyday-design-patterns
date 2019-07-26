<?php

namespace App\FactoryPattern\Resources;

class TakealotCustomer extends Customer {
    public function __construct(array $data)
    {
        $this->name = $data['too_verbose_first_name'] ?? $data['name'];
        $this->surname = $data['too_verbose_last_name'] ?? $data['surname'];
    }

    public function getFullName()
    {
        return $this->name . " " . $this->surname;
    }
}