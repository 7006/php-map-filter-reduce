<?php

namespace Telema\CroCoder;

//const ITEMS = [];
const ITEMS = [12, 46, 32, 64];
//const ITEMS = [12, 46, 32, 5, 3, 76, 64];

class Ex3 {
	
	public static function solution(array $numbers = ITEMS) {
		return [
			'mean' => self::mean($numbers),
			'median' => self::median($numbers)
		];
	}

	private static function mean(array $numbers) {
		$count = count($numbers);
		
		if ($count === 0) {
			return 0;
		}
		
		$sum = 0;
		foreach ($numbers as $number) {
			$sum += $number;
		}
		return $sum / $count;
	}

	private static function median(array $numbers) {
		$count = count($numbers);

		if ($count === 0) {
			return 0;
		} 

		if ($count % 2 === 0) {
			sort($numbers);
			return ($numbers[$count / 2 - 1] + $numbers[$count / 2]) / 2;
		} 

		if ($count % 2 === 1) {
			sort($numbers);
			return $numbers[($count - 1) / 2];
		}
	}

	public static function fpSolution() {

	}
}