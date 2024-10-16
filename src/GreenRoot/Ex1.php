<?php

namespace Telema\GreenRoot;

class Ex1 {
	
	private static function readCustomers() {
		$customersJson = file_get_contents(__DIR__ . '/customers.json');
		return json_decode($customersJson, true);
	}

	public static function solution() {
		$customers = self::readCustomers();
		$seniorCitizens = [];

		foreach ($customers as $customer) {
			if ($customer['age'] > 60) {
				$seniorCitizens[] = $customer;		
			}
		}

		return $seniorCitizens;
	}


	public static function fpSolution() {
		
	}
}
