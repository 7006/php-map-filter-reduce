<?php

namespace Telema\GreenRoot;

class Ex7
{
    public static function solution()
    {
        $expense = 0;

        foreach (Customer::readCustomers() as $customer) {
            if ($customer->married()) {
                $expense += $customer->expense();
            }
        }
        return $expense;
    }

    public static function fpSolution()
    {
        return array_reduce(
            Customer::readCustomers(),
            fn ($expense, $c) => $c->married()
                ? $expense + $c->expense()
                : $expense,
            0
        );
    }
}