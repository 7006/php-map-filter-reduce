<?php

namespace Telema\Greenroot;

use Telema\Customer;

class Ex5
{
    public static function solution()
    {
        foreach (Customer::readCustomers() as $customer) {
            if ($customer->ltAge(10)) {
                return $customer;
            }
        }
    }
}
