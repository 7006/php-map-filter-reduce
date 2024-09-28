<?php


namespace Telema\CroCoder;

class Ex1 {

	public static $ITEMS = [1, 2, 3, 4, 5];

	public static function solution(array $items = []) {
		$result = [];
		foreach ($items as $item) {
			$result[] = $item ** 2;
		}
		return $result;
	}

	public static function fpSolution(array $items = []) {

	}
}