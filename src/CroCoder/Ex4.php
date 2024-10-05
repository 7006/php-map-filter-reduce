<?php

namespace Telema\CroCoder;

const ITEMS = 'George Raymond Richard Martin';
// const ITEMS = '';

class Ex4 {
	
	public static function solution(string $nameString = ITEMS) {
		$names = explode(' ', $nameString);
		
		$initials = [];
		foreach ($names as $name) {
			$initial = $name[0];
			$initials[] = $initial;
		}
		
		return implode('', $initials);
	}

	public static function fpSolution(string $nameString = ITEMS) {
		$names = explode(' ', $nameString);

		$fn = function($name) {
			return $name[0];
		};
		$initials = array_map($fn, $names);

		return implode('', $initials);
	}
}
