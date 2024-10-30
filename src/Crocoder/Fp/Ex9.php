<?php

namespace Telema\Crocoder\Fp;

use Telema\Crocoder\Ex9 as BaseEx9;
use Telema\Math;

class Ex9 extends BaseEx9
{	
	public function __invoke() {
		
		$fn = function ($item) {
			return Math::avg(array_sum($item['scores']), 3) > 90;
//				$item['scores'] = $avg;
			
		};

		return array_filter(self::ITEMS, $fn);
	}
}