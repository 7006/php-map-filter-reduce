<?php

namespace Telema\GreenRoot;

class Ex3 {

	private static function readCustomers() {
		return json_decode(file_get_contents(__DIR__ . '/customers.json'), true);
	}

	

	public static function solution() {
		$sum = 0;
		$count = 0;

		foreach (self::readCustomers() as $customer) {
			if (in_array('Book', $customer['purchased'])) {
				$sum += $customer['age'];
				++$count;		
			}
		}
		return $sum / $count;
	}

	public static function fpSolution() {
		$customersWhoBoughtBook = array_filter(
			self::readCustomers(),
			fn ($customer) => in_array('Book', $customer['purchased'])
		);
		$count = count($customersWhoBoughtBook);
		$ages = array_map(fn ($customer) => $customer['age'], $customersWhoBoughtBook);
		$sum = array_sum($ages);
		return $sum / $count;
		//array_reduce($ages, $fn, $sum);
	}
}