<?php

namespace Telema\GreenRoot;

class Ex2
{
    public static function addTitleFullname($customer)
    {
        return $customer->toArray() +
            [   
                'title_full_name' => $customer->title() . ' ' . $customer->fullName()
            ];
    }

    public static function solution()
    {
        $customers = [];

        foreach (Customer::readCustomers() as $customer) {
            $customers[] = self::addTitleFullname($customer);
        }

        return $customers;
    }

    public static function fpSolution()
    {
        return array_map(
            self::addTitleFullname(...),
            Customer::readCustomers()
        );
    }
}