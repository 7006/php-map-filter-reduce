<?php

namespace Telema\CroCoder;

class Ex3 {

	//public static $ITEMS = [];
	public static $ITEMS = [12, 46, 32, 64];
	//public static $ITEMS = [12, 46, 32, 5, 3, 76, 64];
	
	public static function solution(array $numbers = []) {
		return [
			'mean' => self::mean($numbers),
			'median' => self::median($numbers)
		];
	}

	private static function mean(array $numbers) {
		$sum = 0;
		foreach ($numbers as $number) {
			$sum += $number;
		}
	
		$count = count($numbers);

		if ($count === 0) {
			$mean = 0;
		} else {
			$mean = $sum / $count;	
		}

		return $mean;
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