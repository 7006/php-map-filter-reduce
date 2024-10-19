<?php

namespace Telema\GreenRoot;

class Ex7
{
    private static function readCustomers()
    {
        return json_decode(file_get_contents(__DIR__ . '/customers.json'), true);
    }

    public static function solution()
    {
        $expense = 0;

        foreach (self::readCustomers() as $customer) {
            if ($customer['married']) {
                $expense += $customer['expense'];
            }
        }
        return "Total Expense of Married Customers: $expense";
    }

    public static function fpSolution()
    {
        return array_reduce(
            self::readCustomers(),
            fn ($expense, $customer) => $customer['married'] 
                ? $expense + $customer['expense'] 
                : $expense,
            0
        );
    }
}
