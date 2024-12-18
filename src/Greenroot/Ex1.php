<?php

namespace Telema\Greenroot;

use Telema\Customer;
use Telema\traits\JsonReader;

class Ex1
{
    use JsonReader;

    public const FILE_PATH = __DIR__ . '/../../data/greenroot/customers.json';

    public function readCustomers()
    {
        $customers = $this->readJson(self::FILE_PATH);
        return array_map(fn ($customer) => new Customer($customer), $customers);
    }

    public function __invoke()
    {
        $seniorCitizens = [];

        foreach ($this->readCustomers() as $customer) {
            if ($customer->gtAge(60)) {
                $seniorCitizens[] = $customer;
            }
        }

        return $seniorCitizens;
    }
}
