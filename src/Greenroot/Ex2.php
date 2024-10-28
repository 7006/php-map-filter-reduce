<?php

namespace Telema\Greenroot;

use Telema\Customer;

class Ex2
{
    public function __invoke()
    {
        $customers = [];

        foreach (Customer::readCustomers() as $customer) {
            $customers[] = Customer::addTitleFullname($customer);
        }

        return $customers;
    }
}
