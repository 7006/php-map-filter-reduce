<?php

namespace Telema\Greenroot;

class Ex5
{
    public static function solution()
    {
        foreach (Customer::readCustomers() as $customer) {
            if ($customer->ltAge(10)) {
                return $customer;
            }
        }
    }

    public static function fpSolution()
    {
        $customers = Customer::readCustomers();
        [$youngest] = Customer::sortByAge($customers);

        return $youngest;
    }
}
