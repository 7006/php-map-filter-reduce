<?php

namespace Telema\GreenRoot;

class Ex5
{
    private static function readCustomers()
    {
        return json_decode(file_get_contents(__DIR__ . '/customers.json'), true);
    }

    private static function sortByAge($customers)
    {
        usort($customers, fn ($cc, $nc) => $cc['age'] <=> $nc['age']);
        return $customers;
    }

    public static function solution()
    {
        foreach (self::readCustomers() as $customer) {
            if ($customer['age'] < 10) {
                return $customer;
            }
        }
    }

    public static function fpSolution()
    {
        $youngestAndOldestCustomers = [];
        $customers = self::readCustomers();
        $sortedCustomers = self::sortByAge($customers);

        $youngestAndOldestCustomers[] = $sortedCustomers[0];
        $youngestAndOldestCustomers[] = $sortedCustomers[count($sortedCustomers) - 1];

        return $youngestAndOldestCustomers;
    }
}
