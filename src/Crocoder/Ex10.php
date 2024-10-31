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

	public const HIGH_PRICE = 50;

	protected function average($products) {
		$sum = array_sum(array_column($products, 'price'));
		$count = count($products);
		return Math::avg($sum, $count);
	}

	public function __invoke() {
		$categories = [];
		$highPricedCategories = [];
				
		foreach (self::PRODUCTS as $product) {
			$categories[$product['category']][] = $product;
		}

		foreach ($categories as $categoryName => $products) {
			$avgPrice = $this->average($products);

			if ($avgPrice > self::HIGH_PRICE) {
				$highPricedCategories[] = [
					'category' => $categoryName,
					'average' => $avgPrice
				];
			}
		}
		return $highPricedCategories;
	}
}