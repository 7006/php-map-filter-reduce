<?php

namespace Telema\Greenroot\Fp;

use Telema\Customer;

class Ex5
{
    public function __invoke()
    {
        $customers = Customer::readCustomers();
        [$youngest] = Customer::sortByAge($customers);

        return $youngest;
    }
}
