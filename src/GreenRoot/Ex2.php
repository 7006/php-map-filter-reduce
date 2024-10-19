<?php

namespace Telema\GreenRoot;

class Ex2
{
    public static function addTitleFullname($customer)
    {
        return $customer->toArray() +
            [
                'title' => $customer->title(),
                'full_name' => $customer->fullName()
            ];
    }

    public static function solution()
    {
        $customers = [];

        foreach (Customer::readCustomers() as $customer) {
            $customers[] = self::addTitleFullname($customer); // заменить на синтаксис имя_функции(...)
        }

        return $customers;
    }

    public static function fpSolution()
    {
        return array_map(
            fn ($c) => self::addTitleFullname($c),
            Customer::readCustomers()
        );
    }
}
