<?php

namespace Telema\Greenroot\Fp;

use Telema\Customer;
use Telema\Greenroot\Traits\Customers;

class Ex4
{   
    use Customers;

    public function __invoke()
    {
        $lt10 = array_reduce(
            $this->readCustomers(),
            fn ($accum, $c) => $accum || $c->ltAge(10),
            false
        );

        return $lt10 ? 'Yes' : 'No';
    }
}
