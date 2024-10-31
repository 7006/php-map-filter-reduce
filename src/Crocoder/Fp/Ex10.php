<?php

namespace Telema\Crocoder\Fp;

use Telema\Math;
use Telema\Crocoder\Ex10 as BaseEx10;

class Ex10 extends BaseEx10
{
	public function __invoke() {
			
		$fn_reduce = function ($categories, $product) {
			$categories[$product['category']][] = $product;
			return $categories;
		};

		$categories = array_reduce(self::PRODUCTS, $fn_reduce, []);
		
		$fn_map = function ($category) {

			$avgPrice = $this->averagePrice($category);

			if ($avgPrice > self::HIGH_PRICE) {
				return [
					'category' => $category[0]['category'],
					'average' => $avgPrice
				];
			}
		};

		return array_map($fn_map, $categories);
	}
}