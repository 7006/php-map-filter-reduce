<?php

namespace Telema\Crocoder\Fp;

use Telema\Math;
use Telema\Crocoder\Ex10 as BaseEx10;

class Ex10 extends BaseEx10
{
	public function __invoke() {
			
		$fn = function ($categories, $product) {
			$categories[$product['category']][] = $product;
			return $categories;
		};

		return array_reduce(self::PRODUCTS, $fn, []);
	}
}