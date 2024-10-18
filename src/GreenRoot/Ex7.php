<?php

namespace Telema\GreenRoot;

class Ex7 {
	
	private static function readCustomers() {
		return json_decode(file_get_contents(__DIR__ . '/customers.json'), true);
	}

	public static function solution() {
		$sum = 0;

		foreach (self::readCustomers() as $customer) {
			if ($customer['married']) {
				$sum += $customer['expense'];
			}
		}
		return "Total Expense of Married Customers: $sum";
	}

	public static function fpSolution() {

		return array_reduce(
			self::readCustomers(),
			fn ($sum, $customer) => $customer['married'] ? $sum + $customer['expense'] : $sum,
			0);
	}
}