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

// provider = 'frob'
// [
//     ['id' => 10, 'provider' => 'frob', 'updated_at' => '2024-10-01'],
//     ['id' => 26, 'provider' => 'frob', 'updated_at' => '2024-09-02'],
//     ['id' => 26, 'provider' => 'frob', 'updated_at' => '2024-09-04']
// ]

// provider = 'frob', date = '2024-09-03'
// [
//     ['id' => 10, 'provider' => 'frob', 'updated_at' => '2024-10-01'],
//     ['id' => 26, 'provider' => 'frob', 'updated_at' => '2024-09-04']
// ]

// provider = 'frob', date = '2024-11-00'
// [
// ]

// provider = 'tutu'
// [
// ]


// вот тут твой код с foreach которьій использует значения перменньіх provider и date
// в адресной строке браузера пишешь http://localhost:8080/uncle/3?provider=frob&date=2024-09-03


class Ex3 {
	private static function provider() {
		return isset($_GET['provider']) ? $_GET['provider'] : null;
	}
	
	private static function date() {
		return isset($_GET['date']) ? $_GET['date'] : null;
	}

	private static function dateCompare($item, $date) {
		$arrayData = \DateTimeImmutable::createFromFormat('Y-m-d', $item['updated_at']);
		$inputData = \DateTimeImmutable::createFromFormat('Y-m-d', $date);
		return $arrayData >= $inputData;
	}

	public static function solution(array $items = ITEMS) {
		$provider = self::provider();
		$date = self::date();
		$result =[];

		if(isset($provider) && !isset($date)) {
			foreach ($items as $item) {
				if ($item['provider'] === $provider) {
					$result[] = $item;
				}
			}
		}

		if(isset($provider) && isset($date)) {
			foreach ($items as $item) {
				if ($item['provider'] === $provider && self::dateCompare($item, $date)) {
					$result[] = $item;
				}
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