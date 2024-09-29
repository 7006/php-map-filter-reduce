<?php

namespace Telema\Svekis;

class Ex3 {

	public static $ITEMS = [
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

	public static function solution(array $students = []) {
		$names = [];
		foreach ($students as $student) {
			$names[] = $student['name'];
		}
		return $names;
	}

	public static function fpSolution(array $students = []) {
		$fn = function($student) {
			return $student['name'];
		};

		return array_map($fn, $students);
	}
}