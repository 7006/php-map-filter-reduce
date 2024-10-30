<?php

namespace Telema\Crocoder\Fp;

use Telema\Crocoder\Ex9 as BaseEx9;
use Telema\Math;

class Ex9 extends BaseEx9
{	
	public function __invoke() {

		$fn = function ($result, $item) {

			if ($this->avgScore($item) > self::AVERAGE_SCORE) {
				$result[] = [
					'name' => $item['name'],
					'average' => $this->avgScore($item)
				];
			}
			return $result;
		};

		return array_reduce(self::ITEMS, $fn, []);
	}
}
