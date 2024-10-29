<?php

namespace Telema\Crocoder;

class Ex7
{
	public const NUMBER = 6;

	public function __invoke() {
		$factorial = 1;

		foreach (range(1, self::NUMBER) as $number) {
			$factorial *= $number;
		}
		return $factorial;
	}
}