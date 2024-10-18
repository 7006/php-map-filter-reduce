<?php

namespace Telema\GreenRoot;

class Ex6 {
	
	private static function readCustomers() {
		return json_decode(file_get_contents(__DIR__ . '/customers.json'), true);
	}

	public static function solution() {
		$customersWitoutPurchase = [];
		
		foreach (self::readCustomers() as $customer) {
			if (empty($customer['purchased'])) {
				$customersWitoutPurchase[] = $customer;
			}
		}

		return $customersWitoutPurchase; 
	}

	public static function fpSolution() {
		return array_filter(self::readCustomers(), fn ($customer) => empty($customer['purchased'])); 
	}
}