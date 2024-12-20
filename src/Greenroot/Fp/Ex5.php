<?php

namespace Telema\Greenroot\Fp;

use Telema\Customer;
use Telema\Greenroot\Traits\Customers;

class Ex5
{   
    use Customers;

    public function __invoke()
    {
        $customers = $this->readCustomers();
        [$youngest] = Customer::sortByAge($customers);

        return $youngest;
    }
}
