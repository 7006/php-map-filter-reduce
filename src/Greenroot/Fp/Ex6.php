<?php

namespace Telema\Greenroot\Fp;

use Telema\Customer;

class Ex6
{
    public static function solution()
    {
        return array_filter(
            Customer::readCustomers(),
            fn ($c) => $c->hasPurchased()
        );
    }
}
