<?php

namespace Telema\GreenRoot;

class Ex5 {

	private static function readCustomers() {
		return json_decode(file_get_contents(__DIR__ . '/customers.json'), true);
	}

	// private static function sortByAge() {
	// }

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
		$youngestAndOldest = [];
		$customers = self::readCustomers();

		$fn = function ($currentCustomer, $nextCustomer) {
			return $currentCustomer['age'] <=> $nextCustomer['age'];
		};

		uasort($customers, $fn);
		$customers = array_values($customers);

		$youngestAndOldest[] = $customers[0];
		$youngestAndOldest[] = $customers[count($customers) - 1];

		return $youngestAndOldest;
	}
}