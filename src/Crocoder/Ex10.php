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
		$groups = [];
		
		foreach (self::ITEMS as $item) {
			if (array_key_exists($item['category'], $groups)) {
				$groups[$item['category']]['sum'] += $item['price'];
				$groups[$item['category']]['count']++;
			} else {
				// echo '<pre>';
				// print_r($groups);
				// echo '</pre>';
				$groups[$item['category']]['sum'] += $item['price'];
				$groups[$item['category']]['count']++;
			}
		}

		// Math::avg($result['sum'], $result['count']);
		
		return $groups;
	}
}