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

const RATINGS = [
    ['provider' => 'yolo', 'rating' => 0.7],
    ['provider' => 'frob', 'rating' => 0.2],
    ['provider' => 'boom', 'rating' => 0.5]
];

class Ex4 {

	private static function rating() {
		return empty($_GET['rating']) ? null : $_GET['rating'];
	}

	public static function solution(array $items = ITEMS) {
		echo self::rating();
	}

	public static function fpSolution(array $items = ITEMS) {
		
	}
}