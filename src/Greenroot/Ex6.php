<?php

namespace Telema\Greenroot;

use Telema\Customer;

class Ex6
{
    public function __invoke()
    {
        $noPurchase = [];

        foreach (Customer::readCustomers() as $customer) {
            if ($customer->hasPurchased()) {
                $noPurchase[] = $customer;
            }
        }

        return $noPurchase;
    }
}
