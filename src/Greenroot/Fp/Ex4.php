<?php

namespace Telema\Greenroot\Fp;

use Telema\Customer;

class Ex4
{
    public function __invoke()
    {
        $lt10 = array_reduce(
            Customer::readCustomers(),
            fn ($accum, $c) => $accum || $c->ltAge(10),
            false
        );

        return $lt10 ? 'Yes' : 'No';
    }
}
