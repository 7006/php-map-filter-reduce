<?php

namespace Telema\Crocoder;

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

	public function counter($result, $item) {
		$result['sum'] += $item['price'];
		$result['counter']++;
		return  $result;
	}

	public function __invoke() {
		
		$results = [
			[
				'category' => '',
				'sum' => 0,
				'counter' => 0
			],
		];

		foreach ($results as $result) {
			foreach (self::ITEMS as $item) {
			if ($result['category'] === $item['category']) {
				$result = $this->counter($result, $item);
			} else {
				$result['category'] = $item['category'];
				$result = $this->counter($result, $item);
			}

			echo '<pre>';
			print_r($result);
			echo '</pre>';
			}
		}
	}

}