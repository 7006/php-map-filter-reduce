<?php

namespace Telema\Uncle;

const PROVIDERS = [
    ['id' => 22, 'provider' => 'yolo'],
    ['id' => 10, 'provider' => 'frob'],
    ['id' => 34, 'provider' => 'yolo'],
    ['id' => 43, 'provider' => 'boom'],
    ['id' => 26, 'provider' => 'frob'],
    ['id' => 34, 'provider' => 'boom'],
    ['id' => 43, 'provider' => 'boom'],
    ['id' => 26, 'provider' => 'frob']
];

const PROVIDER_RATINGS = [
    ['provider' => 'yolo', 'rating' => 0.7],
    ['provider' => 'frob', 'rating' => 0.2],
    ['provider' => 'boom', 'rating' => 0.5]
];

class Ex4 {

	private static function rating() {
		return empty($_GET['rating']) ? null : $_GET['rating'];
	}

	public static function solution(array $providers = PROVIDERS, array $providerRatings = PROVIDER_RATINGS) {
		$result = [];

		foreach ($providers as $provider) {
			foreach ($providerRatings as $providerRating) {
				if ($providerRating['rating'] >= self::rating() 
					&& $provider['provider'] === $providerRating['provider'] ) {
					$result[] = $provider;
				}
			}
		}

		return $result;
	}

	public static function fpSolution(array $providers = PROVIDERS, array $providerRatings = PROVIDER_RATINGS) {
		$result = [];
		$ratings = array_filter($providerRatings, fn ($providerRating) => $providerRating['rating'] >= self::rating());

		// попробуй вместо єтого цикла встроенную фукцию in_array 
		// 
		// foreach ($ratings as $rating) {
		//		if ($item['provider'] === $rating['provider'] ) {
		//
		//

		// foreach ($providers as $provider) {
		// 	foreach ($ratings as $rating) {
		// 		if ($provider['provider'] === $rating['provider'] ) {
		// 			$result[] = $provider;
		// 		}
		// 	}
		
		foreach ($providers as $provider) {
			foreach ($ratings as $rating) {
				if (in_array($rating['provider'], $provider)) {
					$result[] = $provider;
				}
			}
		}
		
		return $result;
	}
}
 