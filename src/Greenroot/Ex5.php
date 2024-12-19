<?php

namespace Telema\Greenroot;

use Telema\Customer;
use Telema\Greenroot\Traits\Customers;

class Ex5
{
    use Customers;

    public function __invoke()
    {
        foreach ($this->readCustomers() as $customer) {
            if ($customer->ltAge(10)) {
                return $customer;
            }
        }
    }
}
