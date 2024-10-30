<?php

namespace Telema\Crocoder\Fp;

use Telema\Crocoder\Ex9 as BaseEx9;
use Telema\Math;

class Ex9 extends BaseEx9
{	
	public function __invoke() {

		$fn = function ($item) {
			$item['scores'] = array_sum($item['scores']);
			return $item;
		};
		
		return array_filter(
			array_map($fn, self::ITEMS),
			fn($item) => Math::avg($item['scores'], 3) > 90
		);
	}
}
