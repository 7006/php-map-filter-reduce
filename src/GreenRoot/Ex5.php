<?php

namespace Telema\GreenRoot;

class Ex5
{
    public static function solution()
    {
        foreach (Customer::readCustomers() as $customer) {
            if (Customer::ltAge($customer, 10)) {
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
