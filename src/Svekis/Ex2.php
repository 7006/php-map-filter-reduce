<?php

namespace Telema\Svekis;

class Ex2 {

	public static $ITEMS = ['apple', 'carrot', 'bannana', 'lemmon'];

	public static function solution(array $lowCaseStrings = []) {
		$ipperCaseStrings =[];
		foreach ($lowCaseStrings as $lowCaseString) {
			$ipperCaseStrings[] = strtoupper($lowCaseString);
		}

		return $ipperCaseStrings;
	}

	public static function fpSolution(array $lowCaseStrings = []) {

	}
} 