<?php

namespace Telema\Crocoder\Fp;

use Telema\Math;
use Telema\Crocoder\Ex10 as BaseEx10;

class Ex10 extends BaseEx10
{	
	private function groupByCatgeory() {
		$fn = function ($categories, $product) {
			$categories[$product['category']][] = $product;
			return $categories;
		};

		return array_reduce(self::PRODUCTS, $fn, []);
	}

	private function filterHighPricedCategories($categories) {
		$fn = function ($category) {
			$avgPrice = $this->averagePrice($category);

			if ($avgPrice > self::HIGH_PRICE) {
				return [
					'category' => $category[0]['category'],
					'average' => $avgPrice
				];
			} else {
				return [];
			}
		};

		return array_map($fn, $categories);
	}

	public function __invoke() {
		$categories	= $this->groupByCatgeory();
		return $this->filterHighPricedCategories($categories);
	}
}
