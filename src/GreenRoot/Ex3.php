<?php

namespace Telema\GreenRoot;

class Ex3
{
    private static function readCustomers()
    {
        return json_decode(file_get_contents(__DIR__ . '/customers.json'), true);
    }

    private static function isCustomerPurchasedBook($customer)
    {
        return in_array('Book', $customer['purchased']);
    }

    private static function avgAge($totalAge, $count)
    {
        try {
            return intdiv($totalAge, $count);
        } catch (\DivisionByZeroError $e) {
            return 0;
        }
    }

    public static function solution()
    {
        $totalAge = 0;
        $count = 0;

        foreach (self::readCustomers() as $customer) {
            if (self::isCustomerPurchasedBook($customer)) {
                $totalAge += $customer['age'];
                $count += 1;
            }
        }

        return self::avgAge($totalAge, $count);
    }

    public static function fpSolution2()
    {
        $customersWhoBoughtBook = array_filter(
            self::readCustomers(),
            self::isCustomerPurchasedBook(...)
        );

        $count = count($customersWhoBoughtBook);

        $totalAge = array_reduce(
            $customersWhoBoughtBook,
            fn ($age, $customer) => $age + $customer['age'],
            0
        );

        return self::avgAge($totalAge, $count);
    }

    public static function fpSolution3()
    {
        $fn = function ($accum, $customer) {
            if (self::isCustomerPurchasedBook($customer)) {
                $accum['age'] += $customer['age'];
                $accum['count'] += 1;
            }
            return $accum;
        };

        $accum = array_reduce(
            self::readCustomers(),
            $fn,
            [
                'age' => 0,
                'count' => 0
            ]
        );

        return self::avgAge($accum['age'], $accum['count']);
    }

    public static function fpSolution() {

        $fn = function ($accum, $customer) {
            [$age, $count] = $accum;
            
            if (self::isCustomerPurchasedBook($customer)) {
                $age += $customer['age'];
                $count += 1;
            }
            
            return [$age, $count];
        };
     
        [$age, $count] = array_reduce(self::readCustomers(), $fn, [0, 0]);
        
        return self::avgAge($age, $count);
    }   
}
