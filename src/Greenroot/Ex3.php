<?php

namespace Telema\Greenroot;

use Telema\Customer;
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
}
