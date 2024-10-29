<?php

namespace Telema\Crocoder;

class Ex8
{
	const ITEMS = [
		['a', 'b', 'c'],
		['c', 'd', 'f'],
		['d', 'a', 'g'],
	];

	static function fn($result, $item) {
		if (!array_key_exists($item, $result)) {
			$result[$item] = 1;
		} else {
			$result[$item] += 1;
		}
		return $result;
	}

	public function __invoke() {
		$result = [];

		foreach (array_merge(...self::ITEMS) as $item) {
			$result = self::fn($result, $item);
		}

		return $result;
	}
}