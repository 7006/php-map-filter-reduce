<?php

namespace Telema\Greenroot\Fp;

use Telema\Customer;

class Ex1
{
    public static function solution()
    {
        return array_filter(
            Customer::readCustomers(),
            fn ($c) => $c->gtAge(60)
        );
    }
}
