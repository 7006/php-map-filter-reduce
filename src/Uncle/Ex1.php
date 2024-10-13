<?php

namespace Telema\Uncle;

const ITEMS = [
        ['food' => 'apple'],
        ['food' => 'carrot'],
        ['food' => 'beet'],
        ['food' => 'lemon'],
        ['food' => 'pear'],
        ['food' => 'potato'],
        ['food' => 'apple'],
        ['food' => 'lemon'],
        ['food' => 'nuts'],
    ];

class Ex1 {

	public static function solution(array $fruits = ITEMS) {
		$result = [];
		foreach ($fruits as $fruit) {
			$fruit['color'] = Ex1::color($fruit);
			$result[] = $fruit;
		}
		return $result;
	}

	public static function fpSolution(array $fruits = ITEMS) {
		$fn = function ($fruit) {
			$fruit['color'] = Ex1::color($fruit);
			return $fruit;
		};
		return array_map($fn, $fruits);
	}

	private static function color($fruit) {
		$color = match ($fruit['food']) {
			'apple' => 'yellow',
			'carrot' => 'green',
			'beet' => 'green',
			'lemon' => 'yellow',
			'pear' => 'yellow',
			'potato' => 'green',
			default => 'unknown'
		};
		return $color;
	}
}