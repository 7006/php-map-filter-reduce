<?php

namespace Telema\Crocoder;

use Telema\Math;

class Ex10
{
	public const ITEMS = [
		[
			'name' => 'Product 1',
			'price' => 20,
			'category' => 'Electronics'
		],
		[
			'name' => 'Product 2',
			'price' => 30,
			'category' => 'Clothes'
		],
		[
			'name' => 'Product 3',
			'price' => 40,
			'category' => 'Electronics'
		],
		[
			'name' => 'Product 4',
			'price' => 50,
			'category' => 'Clothes'
		],
		[
			'name' => 'Product 5',
			'price' => 60,
			'category' => 'Clothes'
		],
		[
			'name' => 'Product 6',
			'price' => 70,
			'category' => 'Electronics'
		],
		[
			'name' => 'Product 7',
			'price' => 80,
			'category' => 'Clothes'
		],
		[
			'name' => 'Product 8',
			'price' => 90,
			'category' => 'Electronics'
		]
	];

	// Output
	//
	// [
	// 	[
	// 		'category' => 'Clothes',
	// 		'average' => 55
	// 	],
	// 	[
	// 		'category' => 'Electronics',
	// 		'average' => 55
	// 	],
	// ]

	public function __invoke() {
		$result = [];		
		$categories = [];
		
		foreach (self::ITEMS as $item) {
			if (array_key_exists($item['category'], $categories)) {
				$categories[$item['category']]['sum'] += $item['price'];
				$categories[$item['category']]['count']++;
			} else {
				$categories[$item['category']]['sum'] += $item['price'];
				$categories[$item['category']]['count']++;
			}
		}

		// echo '<pre>';
		// print_r($categories);
		// echo '</pre>';

		foreach ($categories as $category=>$avgParams) {
			$result['category'] = $category;
			$result['average'] = Math::avg($avgParams['sum'], $avgParams['count']);
			if ($result['average'] > 50) {
				$results[] = $result;	
			}
		}
		return $results;
	}
}