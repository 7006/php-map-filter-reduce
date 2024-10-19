<?php

namespace Telema\GreenRoot;

class Ex2
{
    private static function title($customer)
    {

        $gender = $customer['gender'];
        $married = $customer['married'];

        if ($gender === 'M') {
            return 'Mr.';
        }

        if ($gender === 'F' && $married) {
            return 'Mrs.';
        }

        if ($gender === 'F' && !$married) {
            return 'Miss.';
        }

        return '';
    }

    private static function fullName($customer)
    {
        return $customer['title'] . ' ' . $customer['f_name'] . ' ' . $customer['l_name'];
    }

    public static function solution()
    {
        $customers = [];

        foreach (Customer::readCustomers() as $customer) {
            $customer['title'] = self::title($customer);
            $customer['full_name'] = self::fullName($customer);
            $customers[] = $customer;
        }

        return $customers;
    }

    public static function fpSolution()
    {
        $fn	= function ($customer) {
            $customer['title'] = self::title($customer);
            $customer['full_name'] = self::fullName($customer);
            return $customer;
        };
        return array_map($fn, Customer::readCustomers());
    }
}
