<?php

namespace Telema\Svekis;

const ITEMS = [
		[
			'name' => 'Alice',
			'age' => 25
		],
		[
			'name' => 'Bob',
			'age' => 30
		],
		[
			'name' => 'Charlie',
			'age' => 22
		]
	];

class Ex3 {

	public static function solution(array $students = ITEMS) {
		$names = [];
		foreach ($students as $student) {
			$names[] = $student['name'];
		}
		return $names;
	}

	public static function fpSolution(array $students = ITEMS) {
		$fn = function($student) {
			return $student['name'];
		};

		return array_map($fn, $students);
	}

	public static function fpSolution2(array $students = ITEMS, $key = 'age') {
		$fn = function($student) use($key) {
			return $student[$key];
		};
		
		return array_map($fn, $students);
	}
}