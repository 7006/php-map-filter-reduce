<?php

namespace Telema\GreenRoot;

class Ex6
{
    public static function solution()
    {
        $noPurchase = [];

        foreach (Customer::readCustomers() as $customer) {
            if (empty($customer['purchased'])) {
                $noPurchase[] = $customer;
            }
        }

        return $noPurchase;
    }

    public static function fpSolution()
    {
        return array_filter(Customer::readCustomers(), fn ($customer) => empty($customer['purchased']));
    }
}
