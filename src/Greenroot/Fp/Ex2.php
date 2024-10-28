<?php

namespace Telema\Greenroot\Fp;

use Telema\Customer;

class Ex2
{
    public function __invoke()
    {
        return array_map(
            Customer::addTitleFullname(...),
            Customer::readCustomers()
        );
    }
}
