<?php

namespace Telema\GreenRoot;

class Ex5 {

	private static function readCustomers() {
		return json_decode(file_get_contents(__DIR__ . '/customers.json'), true);
	}

	private static function sortByAge($customers) {
		usort($customers, fn ($cc, $nc) => $cc['age'] <=> $nc['age']);
		return array_values($customers);
	}

	private static function getLowerAge($sortedCustomers) {
		return $sortedCustomers[0]['age'];
	}

	private static function getUpperAge($sortedCustomers) {
		return $sortedCustomers[count($sortedCustomers) - 1]['age'];
	}

	private static function getYoungestAndOldestCustomers($sortedCustomers) {
		$youngestAndOldestCustomers =[];
		$lowerAge = self::getLowerAge($sortedCustomers);
		$upperAge = self::getUpperAge($sortedCustomers);

		$youngestAndOldestCustomers[] = array_filter(
			$sortedCustomers,
			fn ($customer) => $customer['age'] === $lowerAge || $customer['age'] === $upperAge
		);
		
		return $youngestAndOldestCustomers;
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
		$sortedCustomers = self::sortByAge($customers);
		$youngestAndOldestCustomers = self::getYoungestAndOldestCustomers($sortedCustomers);
		
		return $youngestAndOldestCustomers;
	}
}