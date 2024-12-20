<?php

namespace Telema\Greenroot\Fp;

use Telema\Customer;
use Telema\Greenroot\Traits\Customers;

class Ex2
{
    use Customers;

    public function __invoke()
    {
        return array_map(
            Customer::addTitleFullname(...),
            $this->readCustomers()
        );
    }
}
