<?php

namespace Telema\Greenroot;

class Customer
{
    public const PATH = __DIR__ . '/customers.json';

    private $customer;

    public static function readCustomers()
    {
        $customers = json_decode(file_get_contents(self::PATH), true);
        return array_map(fn ($customer) => new Customer($customer), $customers);
    }

    public static function sortByAge($customers)
    {
        usort($customers, fn ($c1, $c2) => $c1->age() <=> $c2->age());
        return $customers;
    }

    public function __construct($customer)
    {
        $this->customer = $customer;
    }

    public function toArray()
    {
        return $this->customer;
    }

    public function married()
    {
        return $this->customer['married'];
    }

    public function expense()
    {
        return $this->customer['expense'];
    }

    public function gtAge($age)
    {
        return $this->customer['age'] > $age;
    }

    public function ltAge($age)
    {
        return $this->customer['age'] < $age;
    }

    public function age()
    {
        return $this->customer['age'];
    }

    public function isPurchased($product)
    {
        return in_array($product, $this->customer['purchased']);
    }

    public function hasPurchased()
    {
        return count($this->customer['purchased']) > 0;
    }

    public function title()
    {
        $gender = $this->customer['gender'];
        $married = $this->customer['married'];

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

    public function fullName()
    {
        return $this->customer['f_name'] . ' ' . $this->customer['l_name'];
    }
}
