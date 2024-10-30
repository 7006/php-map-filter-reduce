<?php

namespace Telema\Crocoder\Fp;

use Telema\Crocoder\Ex9 as BaseEx9;
use Telema\Math;

class Ex9 extends BaseEx9
{	
		// public function __invoke() {

		// 	$fn = function ($item) {
		// 		return [
		// 			'name' => $item['name'],
		// 			'average' => $item['scores']
		// 		];			
		// 	};
			
		// 	$items = array_map($fn, self::ITEMS);

		// 	// echo '<pre>';
		// 	// print_r($items);
		// 	// echo '</pre>';

		// 	return array_filter(
		// 		$items,
		// 		fn($item) => Math::avg(array_sum($item['average']), count($item['average'])) > self::AVARAGE_SCORE
		// 	);
		// }

	public function __invoke() {

		$items = array_filter(
			self::ITEMS,
			fn($item) => Math::avg(array_sum($item['scores']), count($item['scores'])) > self::AVARAGE_SCORE
		);

		// $fn = function ($item) {
		// 	return [
				
		// 	];			
		// };
		
		return array_map(
			fn ($item) => [
				'name' => $item['name'],
				'average' => array_sum($item['scores'])	
			],
		 	array_values($items)
		);

		

		
	}
}
