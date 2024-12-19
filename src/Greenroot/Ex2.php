<?php

namespace Telema\Greenroot;

use Telema\Customer;
use Telema\Greenroot\Traits\Customers;

class Ex2
{
    use Customers;

    public function __invoke()
    {
        $customers = [];

        foreach ($this->readCustomers() as $customer) {
            $customers[] = Customer::addTitleFullname($customer);
        }

        return $customers;
    }
}
