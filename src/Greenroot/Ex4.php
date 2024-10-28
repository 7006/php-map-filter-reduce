<?php

namespace Telema\Greenroot;

use Telema\Customer;

class Ex4
{
    public function __invoke()
    {
        foreach (Customer::readCustomers() as $customer) {
            if ($customer->ltAge(10)) {
                return 'Yes';
            }
        }
        return 'No';
    }
}
