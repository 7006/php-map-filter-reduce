<?php

namespace Telema\Greenroot\Fp;

use Telema\Customer;

class Ex5
{
    public static function solution()
    {
        $customers = Customer::readCustomers();
        [$youngest] = Customer::sortByAge($customers);

        return $youngest;
    }
}
