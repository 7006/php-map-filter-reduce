<?php

namespace Telema\Greenroot\Fp;

use Telema\Customer;

class Ex6
{
    public function __invoke()
    {
        return array_filter(
            Customer::readCustomers(),
            fn ($c) => $c->hasPurchased()
        );
    }
}
