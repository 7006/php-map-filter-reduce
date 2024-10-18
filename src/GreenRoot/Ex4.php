<?php

namespace Telema\GreenRoot;

class Ex4 {

	private static function readCustomers() {
		return json_decode(file_get_contents(__DIR__ . '/customers.json'), true);
	}

	public static function solution() {
		// 1
		// можно сразу вьІйти из метода когда нашли 1го покупателя меньше 10 год
		// тогда єта переменная не нужна
		$doWeHaveYoungCustomers = 'No';

		foreach (self::readCustomers() as $customer) {
			// потешно что if c большой буквьІ
			// но єто лишнее
			If ($customer['age'] < 10) {
				$doWeHaveYoungCustomers = 'Yes'; // 2 тут сразу  return 'Yes'
			}
		}
		
		return $doWeHaveYoungCustomers;	// 3 тут return 'No'
	}

	public static function fpSolution() {
		// тут грамотно
		// очевидно что solution проще
		return array_reduce(
			self::readCustomers(),
			fn ($message, $customer) => ($customer['age'] < 10 ? 'Yes' : 'No'),
			'No'
		);
	}
}
