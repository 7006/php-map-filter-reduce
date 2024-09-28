<?php

namespace Telema\CroCoder;

class Ex2 {
	public static $ITEMS = [1, -4, 12, 0, -3, 29, -150];

	public static function solution(array $numbers = []) {
		$sum = 0;
		foreach ($numbers as $number) {
			if ($number > 0) {
				$sum += $number;
			}
		}
		return $sum;
	}

	public static function fpSolution(array $numbers = []) {
		$positiveNumbers = array_filter($numbers, function($number) { 
			return $number > 0;
		});

		$sum = array_reduce($positiveNumbers, function($oldSum, $positiveNumber) {
			$newSum = $oldSum + $positiveNumber;
			return $newSum;
		}, 0);
		
		return $sum;
	}

	public static function fpSolution2(array $numbers = []) {
		$fn =  function($oldSum, $number) {
			if ($number > 0) {
				$newSum = $oldSum + $number;
			} else {
				$newSum = $oldSum;
			}
			return $newSum;
		};

		$sum = array_reduce($numbers, $fn, 0);
		
		return $sum;
	}
}