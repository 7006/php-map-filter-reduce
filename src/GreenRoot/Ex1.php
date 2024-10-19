<?php

namespace Telema\GreenRoot;

class Ex1
{
    private static function readCustomers()
    {
        return json_decode(file_get_contents(__DIR__ . '/customers.json'), true);
    }

    public static function solution()
    {
        $seniorCitizens = [];

        foreach (self::readCustomers() as $customer) {
            if ($customer['age'] > 60) {
                $seniorCitizens[] = $customer;
            }
        }

        return $seniorCitizens;
    }

    public static function fpSolution()
    {
        return array_filter(self::readCustomers(), fn ($customer) => $customer['age'] > 60);
    }
}
