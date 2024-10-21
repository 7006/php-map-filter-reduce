<?php

namespace Telema\GreenRoot;

use Telema\Math;

class Ex3
{
    public static function solution()
    {
        $totalAge = 0;
        $count = 0;

        foreach (Customer::readCustomers() as $customer) {
            if ($customer->isPurchased('Book')) {
                $totalAge += $customer->age();
                $count += 1;
            }
        }

        return Math::avg($totalAge, $count);
    }

    public static function fpSolution()
    {

        $fn = function ($accum, $c) {
            [$age, $count] = $accum;

            if ($c->isPurchased('Book')) {
                $age += $c->age();
                $count += 1;
            }

            return [$age, $count];
        };

        [$age, $count] = array_reduce(Customer::readCustomers(), $fn, [0, 0]);

        return Math::avg($age, $count);
    }
}
