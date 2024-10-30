<?php

namespace Telema\Crocoder\Fp;

use Telema\Crocoder\Ex9 as BaseEx9;
use Telema\Math;

class Ex9 extends BaseEx9
{	
	public function __invoke() {

		$items = array_filter(
			self::ITEMS,
			fn($item) => self::avgScore($item) > self::AVERAGE_SCORE
		);

		return array_map(
			fn ($item) => [
				'name' => $item['name'],
				'average' => array_sum($item['scores'])	
			],
		 	array_values($items)
		);
	}
}
