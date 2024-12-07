<?php

namespace Telema\Greenroot;

use Telema\Customer;

class Ex1
{
    public function __invoke()
    {
        $seniorCitizens = [];

        foreach (Customer::readCustomers() as $customer) {
            if ($customer->gtAge(60)) {
                $seniorCitizens[] = $customer;
            }
        }

        return $seniorCitizens;
    }
}
