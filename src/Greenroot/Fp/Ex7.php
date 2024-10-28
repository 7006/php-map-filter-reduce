<?php

namespace Telema\Greenroot\Fp;

use Telema\Customer;

class Ex7
{
    public function __invoke()
    {
        return array_reduce(
            Customer::readCustomers(),
            fn ($expense, $c) => $c->married()
                ? $expense + $c->expense()
                : $expense,
            0
        );
    }
}
