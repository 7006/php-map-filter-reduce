<?php

namespace Telema\GreenRoot;

class Ex6
{
    private static function readCustomers()
    {
        return json_decode(file_get_contents(__DIR__ . '/customers.json'), true);
    }

    public static function solution()
    {
        $customersWithoutPurchase = [];

        foreach (self::readCustomers() as $customer) {
            if (empty($customer['purchased'])) {
                $customersWithoutPurchase[] = $customer;
            }
        }

        return $customersWithoutPurchase;
    }

    public static function fpSolution()
    {
        return array_filter(self::readCustomers(), fn ($customer) => empty($customer['purchased']));
    }
}
