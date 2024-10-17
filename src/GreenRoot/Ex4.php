<?php

namespace Telema\GreenRoot;

class Ex4 {

	private static function readCustomers() {
		return json_decode(file_get_contents(__DIR__ . '/customers.json'), true);
	}

	public static function solution() {
		$doWeHaveYoungCustomers = 'No';

		foreach (self::readCustomers() as $customer) {
			If ($customer['age'] < 10) {
				$doWeHaveYoungCustomers = 'Yes';
			}
		}
		
		return $doWeHaveYoungCustomers;	
	}

	public static function fpSolution() {
		return array_reduce(
			self::readCustomers(),
			fn ($message, $customer) => ($customer['age'] < 10 ? 'Yes' : 'No'),
			'No'
		);
	}
}