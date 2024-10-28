<?php

namespace Telema\Greenroot;

use Telema\Customer;

class Ex7
{
    public function __invoke()
    {
        $expense = 0;

        foreach (Customer::readCustomers() as $customer) {
            if ($customer->married()) {
                $expense += $customer->expense();
            }
        }
        return $expense;
    }
}
