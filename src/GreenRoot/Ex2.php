<?php

namespace Telema\GreenRoot;

class Ex2
{
    public static function solution()
    {
        $customers = [];

        foreach (Customer::readCustomers() as $customer) {
            $customer['title'] = Customer::title($customer);
            $customer['full_name'] = Customer::fullName($customer);
            $customers[] = $customer;
        }

        return $customers;
    }

    public static function fpSolution()
    {
        $fn	= function ($customer) {
            $customer['title'] = Customer::title($customer);
            $customer['full_name'] = Customer::fullName($customer);
            return $customer;
        };
        return array_map($fn, Customer::readCustomers());
    }
}
