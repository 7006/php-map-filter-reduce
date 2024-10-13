<?php

namespace Telema\Uncle;

const ITEMS [
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
		foreach ($numbers as $number) {
			$doubledNumbers[] = $number * 2;
		}
		return $doubledNumbers;
	}

	public static function fpSolution(array $numbers = ITEMS) {
		return array_map(fn ($n) => $n * 2, $numbers);
	}
}