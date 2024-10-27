<?php

namespace Telema\Greenroot\Fp;

use Telema\Customer;
use Telema\Math;

class Ex3
{
    public static function solution()
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
