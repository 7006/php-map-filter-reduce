<?php

namespace Telema\Svekis;

class Ex1 {

	public static $ITEMS = [3, 56, 23, 4, 1, 67, 5];

	public static function solution(array $numbers = []) {
		$doubledNumbers = [];
		foreach ($numbers as $number) {
			$doubledNumbers[] = $number * 2;
		}
		return $doubledNumbers;
	}

	public static function fpSolution(array $numbers = []) {
		$fn = function($number) {
			return $number * 2;
		};
		
		return array_map($fn, $numbers);
	}
}