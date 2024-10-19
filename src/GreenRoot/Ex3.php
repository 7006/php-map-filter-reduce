<?php

namespace Telema\GreenRoot;

class Ex3
{
    // сделать отдельньІй класс Math 
    // и положить туда єту функцию
    private static function avg($x, $y)
    {
        try {
            return intdiv($x, $y);
        } catch (\DivisionByZeroError $e) {
            return 0;
        }
    }

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

        return self::avg($totalAge, $count);
    }

    // удалить
    public static function fpSolution1()
    {
        $customersWhoBoughtBook = array_filter(
            Customer::readCustomers(),
            fn ($c) => $c->isPurchased('Book')
        );

        $count = count($customersWhoBoughtBook);

        $totalAge = array_reduce(
            $customersWhoBoughtBook,
            fn ($age, $c) => $age + $c->age(),
            0
        );

        return self::avg($totalAge, $count);
    }

    // удалить
    public static function fpSolution2()
    {
        $fn = function ($accum, $c) {
            if ($c->isPurchased('Book')) {
                $accum['age'] += $c->age();
                $accum['count'] += 1;
            }
            return $accum;
        };

        $accum = array_reduce(
            Customer::readCustomers(),
            $fn,
            [
                'age' => 0,
                'count' => 0
            ]
        );

        return self::avg($accum['age'], $accum['count']);
    }

    public static function fpSolution()
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

        return self::avg($age, $count);
    }
}
