<?php

namespace Telema\Greenroot\Traits;

use Telema\traits\JsonReader;
use Telema\Customer;

trait Customers
{
    use JsonReader;

    public const FILE_PATH = __DIR__ . '/../../../data/greenroot/customers.json';

    public function readCustomers()
    {
        $customers = $this->readJson(self::FILE_PATH);
        return array_map(fn ($customer) => new Customer($customer), $customers);
    }
}
