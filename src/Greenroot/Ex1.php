<?php

namespace Telema\Greenroot;

use Telema\Customer;
use Telema\Greenroot\Traits\Customers;

class Ex1
{
    use Customers;

    public function __invoke()
    {
        $seniorCitizens = [];

        foreach ($this->readCustomers() as $customer) {
            if ($customer->gtAge(60)) {
                $seniorCitizens[] = $customer;
            }
        }

        return $seniorCitizens;
    }
}
