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

	private static function dateCompare($item, string $date) {
		$arrayData = \DateTimeImmutable::createFromFormat('Y-m-d', $item['updated_at']);
		$inputData = \DateTimeImmutable::createFromFormat('Y-m-d', $date);
		return $arrayData >= $inputData;
	}

	private static function checkCondition($item, string $provider, string $date) {

		if (isset($provider) && !isset($date)) {
			if ($item['provider'] === $provider) {
				return $item;
			}
		}
		if (!isset($provider) && isset($date)) {
			if (self::dateCompare($item, $date)) {
				return $item;
			}
		}
		if (isset($provider) && isset($date)) {
			if ($item['provider'] === $provider && self::dateCompare($item, $date)) {
				return $item;
			}
		}
	}

	public static function solution(array $items = ITEMS) {
		$provider = self::provider();
		$date = self::date();
		$result =[];

		foreach ($items as $item) {
			if (self::checkCondition($item, $provider, $date) != null) {
				$result[] = self::checkCondition($item, $provider, $date);	
			}
		}
		return $result;
    }   

    public static function fpSolution(array $items = ITEMS) {
		$provider = self::provider();
		$date = self::date();

		$fn = function ($item) use($provider, $date) {
			
			if(isset($provider) && !isset($date)) {
				return $item['provider'] === $provider;
			}

			if(isset($provider) && isset($date)) {
				return	$item['provider'] === $provider && self::dateCompare($item, $date);
			}
		};
		
		return array_filter($items, $fn);
    }
}