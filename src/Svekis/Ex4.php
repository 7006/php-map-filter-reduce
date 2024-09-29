<?php

namespace Telema\Svekis;

class Ex4 {

	public static $ITEMS = [25, 30, 15, 20];

	public static function solution(array $celsius = []) {
		$fahrenheits = [];
		foreach ($celsius as $temp) {
			$fahrenheits[] = $temp * 9 / 5 +32;
		}
		return $fahrenheits;
	}

	public static function fpSolution(array $celsius = []) {

	}
}