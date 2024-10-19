<?php

namespace Telema\GreenRoot;

class Ex7
{
    public static function solution()
    {
        $expense = 0;

        foreach (Customer::readCustomers() as $customer) {
            if ($customer['married']) {
                $expense += $customer['expense'];
            }
        }
        return "Total Expense of Married Customers: $expense";
    }

    public static function fpSolution()
    {
        return array_reduce(
            Customer::readCustomers(),
            fn ($expense, $customer) => $customer['married'] 
                ? $expense + $customer['expense'] 
                : $expense,
            0
        );
    }
}
