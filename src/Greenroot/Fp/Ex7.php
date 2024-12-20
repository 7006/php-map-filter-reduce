<?php

namespace Telema\Greenroot\Fp;

use Telema\Customer;
use Telema\Greenroot\Traits\Customers;

class Ex7
{
    use Customers;

    public function __invoke()
    {
        return array_reduce(
            $this->readCustomers(),
            fn ($expense, $c) => $c->married()
                ? $expense + $c->expense()
                : $expense,
            0
        );
    }
}
