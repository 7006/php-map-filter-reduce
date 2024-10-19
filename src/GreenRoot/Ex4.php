<?php

namespace Telema\GreenRoot;

class Ex4
{
    public static function solution()
    {
        foreach (Customer::readCustomers() as $customer) {
            if (Customer::ltAge($customer, 10)) {
                return 'Yes';
            }
        }
        return 'No';
    }

    public static function fpSolution()
    {
        $lt10 = array_reduce(
            Customer::readCustomers(),
            fn ($accum, $customer) => $accum || Customer::ltAge($customer, 10),
            false
        );

        return $lt10 ? 'Yes' : 'No';
    }
}