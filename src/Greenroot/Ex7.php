<?php

namespace Telema\Greenroot;

use Telema\Customer;

class Ex7
{
    public static function solution()
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
