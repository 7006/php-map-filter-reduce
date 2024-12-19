<?php

namespace Telema\Greenroot;

use Telema\Customer;
use Telema\Math;
use Telema\Greenroot\Traits\Customers;

class Ex3
{
    use Customers;

    public function __invoke()
    {
        $totalAge = 0;
        $count = 0;

        foreach ($this->readCustomers() as $customer) {
            if ($customer->isPurchased('Book')) {
                $totalAge += $customer->age();
                $count += 1;
            }
        }

        return Math::avg($totalAge, $count);
    }
}
