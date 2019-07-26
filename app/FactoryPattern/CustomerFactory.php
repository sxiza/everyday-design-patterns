<?php

namespace App\FactoryPattern;

use App\FactoryPattern\Resources\TakealotCustomer;
use App\FactoryPattern\Resources\AmazonCustomer;

class CustomerFactory {
    const TYPE_TAKEALOT = 'takealot';
    const TYPE_AMAZON = 'amazon';

    public function build($type, array $data)
    {
        switch ($type) {
            case self::TYPE_TAKEALOT:
                return new TakealotCustomer($data);
            case self::TYPE_AMAZON:
                return new AmazonCustomer($data);
            default:
                throw new \Exception("Invalid Factory Type");
        }
    }
}