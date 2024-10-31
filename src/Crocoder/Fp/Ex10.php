<?php

namespace Telema\Crocoder\Fp;

use Telema\Math;
use Telema\Crocoder\Ex10 as BaseEx10;

class Ex10 extends BaseEx10
{	
	private function groupByCategory() {
		$fn = function ($categories, $product) {
			$categories[$product['category']][] = $product;
			return $categories;
		};

		return array_reduce(self::PRODUCTS, $fn, []);
	}

	private function filterHighPricedCategories($categories) {
		$fn = function ($accum, $category) {
			$avgPrice = $this->averagePrice($category);
			
			if ($avgPrice > self::HIGH_PRICE) {
				$accum[] = [
					'category' => $category[0]['category'],
					'average' => $avgPrice
				];
			} 

			return $accum;
		};

		return array_reduce($categories, $fn, []);
	}

	public function __invoke() {
		$categories	= $this->groupByCategory();
		return $this->filterHighPricedCategories($categories);
	}
}
