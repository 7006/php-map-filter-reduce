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
        $customers = self::readCustomers();
        $sorted = self::sortByAge($customers);

        $youngest = $sorted[0];
        $oldest = $sorted[count($sorted) - 1];

        return [$youngest, $oldest];
    }
}
