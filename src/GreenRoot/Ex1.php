<?php

namespace Telema\GreenRoot;

class Ex1
{
    public static function solution()
    {
        $seniorCitizens = [];

        foreach (Customer::readCustomers() as $customer) {
            if ($customer->gtAge(60)) {
                $seniorCitizens[] = $customer;
            }
        }

        return $seniorCitizens;
    }

    public static function fpSolution()
    {
        return array_filter(
            Customer::readCustomers(),
            fn ($c) => $c->gtAge(60)
        );
    }
}