<?php

namespace Telema\Svekis;

class Ex8 {

	public static $ITEMS = ['2023-01-15', '2023-05-20', '2023-09-10'];  //  ['1/15/2023', '5/20/2023', '9/10/2023']

	public static function solution(array $dates) {
		$newDates = [];
		foreach ($dates as $date) {
			$newDates[] = self::formatDate($date);
		}

		return $newDates;
	}

	public static function fpSolution(array $dates) {
		return array_map([__CLASS__, 'formatDate3'], $dates);
	}		

	private static function formatDate(string $date) {
		[$year, $month, $day] = explode('-', $date, 3);
		return $month . '/' . $day . '/' . $year;
	}

	private static function formatDate2(string $date) {
		$dateTime = \DateTimeImmutable::createFromFormat('Y-m-d', $date);
		return $dateTime->format('m/d/Y');
	}

	private static function formatDate3(string $date) {
		return \DateTimeImmutable::createFromFormat('Y-m-d', $date)->format('m/d/Y');
	}
}