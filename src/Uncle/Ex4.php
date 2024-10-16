<?php

namespace Telema\Uncle;

const ITEMS = [
    ['id' => 22, 'provider' => 'yolo'],
    ['id' => 10, 'provider' => 'frob'],
    ['id' => 34, 'provider' => 'yolo'],
    ['id' => 43, 'provider' => 'boom'],
    ['id' => 26, 'provider' => 'frob'],
    ['id' => 34, 'provider' => 'boom'],
    ['id' => 43, 'provider' => 'boom'],
    ['id' => 26, 'provider' => 'frob']
];

const ITEMS_2 = [
    ['provider' => 'yolo', 'rating' => 0.7],
    ['provider' => 'frob', 'rating' => 0.2],
    ['provider' => 'boom', 'rating' => 0.5]
];

class Ex4 {

	private static function rating() {
		return empty($_GET['rating']) ? null : $_GET['rating'];
	}

	public static function solution(array $items = ITEMS, array $items2 = ITEMS_2) {
		$receivedRating = self::rating();
		$ratings = [];
		$result = [];

		foreach ($items2 as $item2) {
			if ($item2['rating'] >= $receivedRating) {
				$ratings[] = $item2;
			}
		}

		foreach ($items as $item) {
			foreach ($ratings as $rating) {
				if ($item['provider'] === $rating['provider']) {
					$result[] = $item;
				}
			}
		}
		
		// echo '<pre>';
		// print_r($result);
		// echo '</pre>';

		return $result;
	}

	public static function fpSolution(array $items = ITEMS, array $ratings = ITEMS_2) {
		
	}
}