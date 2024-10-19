<?php

namespace Telema\GreenRoot;

class Ex6
{
    public static function solution()
    {
        $noPurchase = [];

        foreach (Customers::readCustomers() as $customer) {
            if (empty($customer['purchased'])) {
                $noPurchase[] = $customer;
            }
        }

        return $noPurchase;
    }

    public static function fpSolution()
    {
        return array_filter(Customers::readCustomers(), fn ($customer) => empty($customer['purchased']));
    }
}
