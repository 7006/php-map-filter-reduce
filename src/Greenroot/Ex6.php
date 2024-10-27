<?php

namespace Telema\Greenroot;

use Telema\Customer;

class Ex6
{
    public static function solution()
    {
        $noPurchase = [];

        foreach (Customer::readCustomers() as $customer) {
            if ($customer->hasPurchased()) {
                $noPurchase[] = $customer;
            }
        }

        return $noPurchase;
    }
}
