<?php

namespace Telema\Greenroot;

use Telema\Customer;

class Ex5
{
    public function __invoke()
    {
        foreach (Customer::readCustomers() as $customer) {
            if ($customer->ltAge(10)) {
                return $customer;
            }
        }
    }
}
