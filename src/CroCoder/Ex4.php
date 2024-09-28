<?php

namespace Telema\CroCoder;

class Ex4 {
	
	public static $ITEMS = 'George Raymond Richard Martin';
	// public static $ITEMS = '';

	public static function solution(string $nameString = '') {
		$names = explode(' ', $nameString);
		
		$initials = [];
		foreach ($names as $name) {
			$initial = $name[0];
			$initials[] = $initial;
		}
		
		return implode('', $initials);
	}

	public static function fpSolution(string $nameString = '') {
		$names = explode(' ', $nameString);

		$fn = function($name) {
			return $name[0];
		};
		$initials = array_map($fn, $names);

		return implode('', $initials);
	}
}
