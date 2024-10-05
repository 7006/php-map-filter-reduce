<?php

namespace Telema\Svekis;

const ITEMS = ['John Doe', 'Alice Smith', 'Bob Johnson', 'Donald Duck III'];

class Ex7 {

	public static function solution(array $names = ITEMS) {
		$initials = [];
		foreach ($names as $name) {
			$initials[] = self::initials($name);
		}
		return $initials;
	}

	public static function fpSolution(array $names = ITEMS) {
		return array_map([__CLASS__, 'initials2'], $names);
	}

	public static function fpSolution2(array $names = ITEMS) {
		return array_map(self::initials2(...), $names);
	}

	private static function initials(string $name) {
		$nameArray = explode(' ', $name);
		$firstName = $nameArray[0];
		$lastName = $nameArray[1];
		$initial = $firstName[0] . $lastName[0];

		return $initial;
	}

	private static function initials2(string $name) {
		[$firstName, $lastName] = explode(' ', $name, 2);
		return $firstName[0] . $lastName[0];
	}
}