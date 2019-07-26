<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\FactoryPattern\CustomerFactory;
use App\DependencyInjection\SMSContract;
use App\StatePattern\OrderContext;

class EverydayPatternsController extends Controller
{
    /** State Pattern */
    public function switchState($state)
    {
        dump((new OrderContext)->moveCart($state));
    }

    /** Dependency Injection */
    public function smsFirstWay(SMSContract $smsService)
    {
        dump($smsService->send("555555", "The first instance in code"));
    }
    public function smsSecondWay(SMSContract $smsService)
    {
        dump($smsService->send("555555", "The second instance in code"));
    }
    public function smsThirdWay(SMSContract $smsService)
    {
        dump($smsService->send("555555", "The third instance in code"));
    }

    /** Factory Pattern */
    public function factory($type)
    {
        /** Just a little placeholder logic to 'create' the right data
         * Effectively this would be what we receive from the external API
         */
        $data = [];
        switch($type) {
            case CustomerFactory::TYPE_TAKEALOT:
                $data = [
                    'name' => "Takealot",
                    'too_verbose_last_name' => "Customer"
                ];
                break;
            case CustomerFactory::TYPE_AMAZON:
                $data = [
                    'name' => "Amazon",
                    'surname' => "Customer"
                ];
                break;
        }

        $resource = (new CustomerFactory)->build($type, $data);
        dump($resource);
        dump("Fullname is -> " . $resource->getFullName());
    }
}