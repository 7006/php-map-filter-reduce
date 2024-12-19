<?php

namespace Telema\Greenroot;

use Telema\Customer;
use Telema\Greenroot\Traits\Customers;

class Ex6
{
    use Customers;

    public function __invoke()
    {
        $noPurchase = [];

        foreach ($this->readCustomers() as $customer) {
            if ($customer->hasPurchased()) {
                $noPurchase[] = $customer;
            }
        }

        return $noPurchase;
    }
}
