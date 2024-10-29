<?php

namespace Telema\Crocoder;

class Ex7
{
	public const NUMBER = 7;

	public function __invoke() {
		$factorial = 1;

		foreach (range(1, self::NUMBER, 1) as $number) {
			$factorial *= $number;
		}
		return $factorial;
	}

	// public function __invoke() {
	// 	$factorial = 1;
	// 	$number = 1;

	// 	while ($number <= self::NUMBER) {
	// 		$factorial *= $number;
	// 		$number++;
	// 	}
	// 	return $factorial;
	// }
}