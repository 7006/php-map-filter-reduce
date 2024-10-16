<?php

namespace Telema\GreenRoot;

class Ex2 {
	
	private static function readCustomers() {
		return json_decode(file_get_contents(__DIR__ . '/customers.json'), true);
	}

	private static function title($customer) {
		
		if ($customer['gender'] === 'M') {
			return 'Mr.';
		}

		if ($customer['gender'] === 'F' && $customer['married']) {
			return 'Mrs.';
		}

		if ($customer['gender'] === 'F' && !$customer['married']) {
			return 'Miss.';
		}
		
		return '';
	}

	private static function fullName($customer) {
		return $customer['title'] . ' ' . $customer['f_name'] . ' ' . $customer['l_name'];
	}

	public static function solution() {
		$customers = [];

		foreach (self::readCustomers() as $customer) {
			$customer['title'] = self::title($customer);
			$customer['full_name'] = self::fullName($customer);
			$customers[] = $customer;
		}
		
		return $customers;
	}

	public static function fpSolution() {
		$fn	= function ($customer) {
			$customer['title'] = self::title($customer);
			$customer['full_name'] = self::fullName($customer);
			return $customer;
		};
		return array_map($fn, self::readCustomers());
	}
}