<?php

namespace Telema\Crocoder;

class Ex8
{
	const ITEMS = [
		['a', 'b', 'c'],
		['c', 'd', 'f'],
		['d', 'a', 'g'],
	];

	public function __invoke() {
		
		$result = [];

		echo '<pre>';
		print_r(self::ITEMS);
		echo '</pre>';		
		
		foreach (array_merge(...self::ITEMS) as $item) {
			if (!array_key_exists($item, $result)) {
				$result[$item] = 1;
			} else {
			$result[$item] += 1;
			}
		}

		return $result;
	}
}