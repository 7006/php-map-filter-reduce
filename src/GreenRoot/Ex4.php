<?php

namespace Telema\GreenRoot;

class Ex4
{
    public static function solution()
    {
        foreach (Customer::readCustomers() as $customer) {
            if ($customer['age'] < 10) {
                return 'Yes';
            }
        }
        return 'No';
    }

    public static function fpSolution()
    {
        return array_reduce(
            Customer::readCustomers(),
            fn ($message, $customer) => ($customer['age'] < 10 ? 'Yes' : 'No'),
            'No'
        );
    }
}
