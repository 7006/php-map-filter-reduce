<?php

namespace Telema\Svekis;

class Ex2 {

	public static $ITEMS = ['london', 'manchester', 'liverpool', 'tbilisi'];

	public static function solution(array $cities = []) {
		$result =[];
		foreach ($cities as $city) {
			$result[] = strtoupper($city);
		}

		return $result;
	}

	public static function fpSolution(array $cities = []) {
		$fn = function($city) {
			return strtoupper($city);
		};

		return array_map($fn, $cities);
	}

	public static function fpSolution2(array $cities = []) {
		return array_map('strtoupper', $cities);
	}
} 