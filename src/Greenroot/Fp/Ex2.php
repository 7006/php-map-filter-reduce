<?php

namespace Telema\Greenroot\Fp;

use Telema\Customer;

class Ex2
{
    public static function solution()
    {
        return array_map(
            Customer::addTitleFullname(...),
            Customer::readCustomers()
        );
    }
}
