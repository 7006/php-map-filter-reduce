<?php

namespace Telema\Crocoder;

use Telema\Math;

class Ex10
{
	public const PRODUCTS = [
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

	public const AVERAGE_LEVEL = 50;

	// public function __invoke() {
	// 	$result = [];		
	// 	$categories = [];
		
	// 	foreach (self::PRODUCTS as $product) {
	// 		$categories[$product['category']]['sum'] += $product['price'];
	// 		$categories[$product['category']]['count']++;
	// 	}

	// 	foreach ($categories as $category=>$avgParams) {
	// 		$result['category'] = $category;
	// 		$result['average'] = Math::avg($avgParams['sum'], $avgParams['count']);
			
	// 		if ($result['average'] > self::PRICE_LEVEL) {
	// 			$highPricedCategories[] = $result;	
	// 		}
	// 	}
	// 	return $highPricedCategories;
	// }

	public function __invoke() {
		$result = [];		
		$categories = [];
				
		foreach (self::PRODUCTS as $product) {
			$categories[$product['category']][] = $product;
		}

		foreach ($categories as $categoryName => $products) {
			$sum = array_sum(array_column($products, 'price'));
			$count = count($products);
						
			$result['category'] = $categoryName;
			$result['average'] = Math::avg($sum, $count);

			if ($result['average'] > self::AVERAGE_LEVEL) {
				$highPricedCategories[] = $result;	
			}
		}
		return $highPricedCategories;
	}
}