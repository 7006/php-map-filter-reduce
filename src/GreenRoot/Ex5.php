<?php

namespace Telema\GreenRoot;

class Ex5
{
    private static function sortByAge($customers)
    {
        usort($customers, fn ($cc, $nc) => $cc['age'] <=> $nc['age']);
        return $customers;
    }

    public static function solution()
    {
        foreach (Customers::readCustomers() as $customer) {
            if ($customer['age'] < 10) {
                return $customer;
            }
        }
    }

    public static function fpSolution()
    {
        $customers = Customers::readCustomers();
        $sorted = self::sortByAge($customers);

        $youngest = $sorted[0];
        $oldest = $sorted[count($sorted) - 1];

        return [$youngest, $oldest];
    }
}
