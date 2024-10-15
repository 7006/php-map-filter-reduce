<?php

namespace Telema\Uncle;

const ITEMS = [
    ['id' => 22, 'provider' => 'yolo', 'updated_at' => '2024-09-28'],
    ['id' => 10, 'provider' => 'frob', 'updated_at' => '2024-10-01'],
    ['id' => 34, 'provider' => 'yolo', 'updated_at' => '2024-09-28'],
    ['id' => 43, 'provider' => 'boom', 'updated_at' => '2024-09-03'],
    ['id' => 26, 'provider' => 'frob', 'updated_at' => '2024-09-02'],
    ['id' => 34, 'provider' => 'boom', 'updated_at' => '2024-09-20'],
    ['id' => 43, 'provider' => 'boom', 'updated_at' => '2024-09-03'],
    ['id' => 26, 'provider' => 'frob', 'updated_at' => '2024-09-04']
];

class Ex3 {
	private static function provider() {
		return isset($_GET['provider']) ? $_GET['provider'] : null;
	}
	
	private static function date() {
		return isset($_GET['date']) ? $_GET['date'] : null;
	}

	private static function isDateGreatThanEqual($item, $date) {
		$dateX = \DateTimeImmutable::createFromFormat('Y-m-d', $item['updated_at']);
		$dateY = \DateTimeImmutable::createFromFormat('Y-m-d', $date);
		return $dateX >= $dateY;
	}

	private static function isMatches($item, $provider = null, $date = null) { 
		if (
			isset($provider) && 
			!isset($date) && 
			$item['provider'] === $provider
		) { 
			return $item;
		} 		

		if (
			!isset($provider) &&
			isset($date) && 
			self::isDateGreatThanEqual($item, $date) // 2 если тут передать $item['updated_at']
		) {
			return $item; // 1 если вот тут вернуть true вместо $item
		}

		if (
			isset($provider) &&
			isset($date) && 
			$item['provider'] === $provider && self::isDateGreatThanEqual($item, $date)
		) {
			return $item;
		}

		// 1 а тут вернуть false
	}

	public static function solution(array $items = ITEMS) {
		$provider = self::provider();
		$date = self::date();
		$result =[];

		foreach ($items as $item) {
			if (self::isMatches($item, $provider, $date) != null) { // 1 то вот тут не нужно проверять на != null
				$result[] = self::isMatches($item, $provider, $date);	
			}
		}
		return $result;
    }   

    public static function fpSolution(array $items = ITEMS) {
		$provider = self::provider();
		$date = self::date();

		return array_filter($items, fn ($item) => self::isMatches($item, $provider, $date) != null);
    }
}
