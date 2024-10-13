<?php

<?php


namespace Telema\CroCoder;

const ITEMS = [
	[
		'name' => 'Jhon',
		'age' => 13
	],
	[
		'name' => 'Mark',
		'age' => 56
	],
	[
		'name' => 'Rachel',
		'age' => 45
	],
	[
		'name' => 'Nate',
		'age' => 67
	],
	[
		'name' => 'Jennifer',
		'age' => 65
	]
];

class Ex5 {

	public static function solution(array $items = ITEMS) {
		$result = [];
		foreach ($items as $item) {
			$result[] = $item ** 2;
		}
		return $result;
	}

	public static function fpSolution(array $items = ITEMS) {
		return array_map(fn ($item) => $item ** 2, $items);
	}

	public static function fpSolution7(array $items = ITEMS) {
		$callback = function($item) {
			return $item ** 2;
		};
		return array_map($callback, $items);
	}
}