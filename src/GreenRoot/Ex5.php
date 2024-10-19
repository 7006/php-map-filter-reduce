<?php

namespace Telema\GreenRoot;

class Ex5
{
    public static function solution()
    {
        foreach (Customer::readCustomers() as $customer) {
            if ($customer['age'] < 10) {
                return $customer;
            }
        }
    }

    public static function fpSolution()
    {
        $customers = Customer::readCustomers();
        $sorted = Customer::sortByAge($customers);

        $youngest = $sorted[0];
        $oldest = $sorted[count($sorted) - 1];

        return [$youngest, $oldest];
    }
}
