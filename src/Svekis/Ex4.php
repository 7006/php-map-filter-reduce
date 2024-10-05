<?php

namespace Telema\Svekis;

const ITEMS = [25, 30, 15, 20];

class Ex4 {

	public static function solution(array $celsius = ITEMS) {
		$fahrenheits = [];
		foreach ($celsius as $temp) {
			$fahrenheits[] = self::celsiusToFahrenheit($temp);
		}
		return $fahrenheits;
	}

	public static function fpSolution(array $celsius = ITEMS) {
		$fn = function($temp) {
			return self::celsiusToFahrenheit($temp);
		};
		return array_map($fn, $celsius);
	}

	public static function fpSolution2(array $celsius = ITEMS) {
		return array_map([__CLASS__, 'celsiusToFahrenheit'], $celsius);
	}

	private static function celsiusToFahrenheit($temp) {
		return $temp * 9 / 5 + 32;
	}
}