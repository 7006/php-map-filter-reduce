<?php

namespace Telema\GreenRoot;

class Ex5 {

	private static function readCustomers() {
		return json_decode(file_get_contents(__DIR__ . '/customers.json'), true);
	}

	public static function solution() {
		$youngestCustomers = [];

		foreach (self::readCustomers() as $customer) {
			if ($customer['age'] < 10) {
				$youngestCustomers[] = $customer;				
			}
		}
		return $youngestCustomers;
}

	public static function fpSolution2() {
		return array_filter(self::readCustomers(), fn ($customer) => $customer['age'] < 10);
	}

	public static function fpSolution() {

		$customers = self::readCustomers();

		$fn = function ($currentCustomer, $nextCustomer) {
			if ($currentCustomer['age'] === $nextCustomer['age']) {
				return 0;
			}
			return ($currentCustomer['age'] < $nextCustomer['age']) ? -1 : 1;
		};

		// function cmp($currentCustomer, $nextCustomer) {
		// 	if ($currentCustomer['age'] === $nextCustomer['age']) {
		// 		return 0;
		// 	}
		// 	return ($currentCustomer['age'] < $nextCustomer['age']) ? -1 : 1;
		// }

		uasort($customers, $fn);

		// echo '<pre>';
		// print_r($customers);
		// echo '</pre>';

		return $customers;
	}
}