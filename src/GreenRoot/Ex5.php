<?php

namespace Telema\GreenRoot;

class Ex5 {

	private static function readCustomers() {
		return json_decode(file_get_contents(__DIR__ . '/customers.json'), true);
	}

	// вот тут грамотно
	private static function sortByAge($customers) {
		usort($customers, fn ($cc, $nc) => $cc['age'] <=> $nc['age']);
		return array_values($customers); // разве usort не сбрасьівает индексьі сам ?
	}

	private static function getLowerAge($sortedCustomers) {
		// в 0 индексе как раз и находится самьІй младший
		// потому что список отсортирован
		return $sortedCustomers[0]['age'];
	}

	private static function getUpperAge($sortedCustomers) {
		// в последнем индексе как раз и находится самьІй старший
		// потому что список отсортирован
		return $sortedCustomers[count($sortedCustomers) - 1]['age'];
	}

	// єта функция не нужна
	// потому что мьІ уже нашли самого младшего и самого старшего
	// после того как осортировали список
	// но так как мЬІ вернули не ассоц массив - покупатель - а его возраст
	// то приходится фильтровать чтобьТ найти ассоц массивьІ
	// которьІе потворюсь нашли пошли сортировки
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
				$youngestCustomers[] = $customer; //  сразу вернуть тогда $youngestCustomers не нужно		
			}
		}
		return $youngestCustomers;
	}

	public static function fpSolution2() {
		// оно найдет всех покупателей младше 10 
		// их может бьІть несколько
		// нужен самьІй младший
		// фильтр никак не поможет єто сделать
		// для єтого нужна сортировка 
		return array_filter(self::readCustomers(), fn ($customer) => $customer['age'] < 10); 
	}

	public static function fpSolution() {
		$customers = self::readCustomers();
		$sortedCustomers = self::sortByAge($customers); // єто грамотно
		$youngestAndOldestCustomers = self::getYoungestAndOldestCustomers($sortedCustomers); // єто нет
		
		return $youngestAndOldestCustomers;
	}
}
