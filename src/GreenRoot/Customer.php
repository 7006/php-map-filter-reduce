<?php

namespace Telema\GreenRoot;

class Customer {

	public static function readCustomers()
    {
        return json_decode(file_get_contents(__DIR__ . '/customers.json'), true);
    }

    public static function title($customer)
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

    public static function fullName($customer)
    {
        return $customer['title'] . ' ' . $customer['f_name'] . ' ' . $customer['l_name'];
    }

    public static function isCustomerPurchasedBook($customer)
    {
        return in_array('Book', $customer['purchased']);
    }

    public static function sortByAge($customers)
    {
        usort($customers, fn ($cc, $nc) => $cc['age'] <=> $nc['age']);
        return $customers;
    }
}