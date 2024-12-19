<?php

namespace Telema\Greenroot;

use Telema\Customer;
use Telema\Greenroot\Traits\Customers;

class Ex7
{
    use Customers;

    public function __invoke()
    {
        $expense = 0;

        foreach ($this->readCustomers() as $customer) {
            if ($customer->married()) {
                $expense += $customer->expense();
            }
        }
        return $expense;
    }
}
