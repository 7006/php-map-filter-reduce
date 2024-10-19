<?php

namespace Telema\GreenRoot;

class Customer {

	public static function readCustomers()
    {
        return json_decode(file_get_contents(__DIR__ . '/customers.json'), true);
    }
}