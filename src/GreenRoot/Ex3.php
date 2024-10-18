<?php

namespace Telema\GreenRoot;

class Ex3 {

	private static function readCustomers() {
		return json_decode(file_get_contents(__DIR__ . '/customers.json'), true);
	}

	private static function isCustomerPurchasedBook($customer) {
		return in_array('Book', $customer['purchased']);
	}

	private static function isZero($count) {
		if ($count === 0) {
			echo 'Division by zero';
		}	
	}

	public static function solution() {
		$sum = 0;
		$count = 0;

		foreach (self::readCustomers() as $customer) {
			if (self::isCustomerPurchasedBook($customer)) {
				$sum += $customer['age'];
				$count += 1;
			}
		}

		// єто какая-то дічь
		self::isZero($count);
		return intdiv($sum, $count);
		// конец дічі
	}


	public static function fpSolution2() {
		$customersWhoBoughtBook = array_filter(
			self::readCustomers(),
			fn ($customer) => in_array('Book', $customer['purchased'])
		);

		$count = array_reduce(
			$customersWhoBoughtBook,
			fn ($count, $customer) => $count + 1,
			0
		);

		$sum = array_reduce(
			$customersWhoBoughtBook,
			fn ($age, $customer) => $age + $customer['age'],
			0
		);

		self::isZero($count);
		return $sum / $count;
	}

	public static function fpSolution() {
		$fn = function ($accum, $customer) {
			if (self::isCustomerPurchasedBook($customer)) {
				// можно использовать оператор +=
				$accum['age'] = $accum['age'] + $customer['age'];
				$accum['count'] = $accum['count'] + 1;
			}
			// єтот блок else можно не писать
			// если покупатель купил книгу код зайдет в блок if и обновит значение аккутулятора
			// если не купил то код в блок if НЕ зайдет и аккумулятор не поменяется
			else {
				return $accum;
			}
			return $accum; // но вот тут возращать обязательно так как єто договоренность между тобой и функцией array_reduce
		};

		$accum = array_reduce(
			self::readCustomers(),
			$fn,
			[
				'age' => 0,
				'count' => 0
			]
		);
-
		self::isZero($accum['count']);
		return intdiv($accum['age'], $accum['count']);
	}
}
