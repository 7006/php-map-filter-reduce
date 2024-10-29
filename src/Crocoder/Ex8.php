<?php

namespace Telema\Crocoder;

class Ex8
{
	const ITEMS = [
		['a', 'b', 'c'],
		['c', 'd', 'f'],
		['d', 'a', 'g'],
	];

	protected function frequency($result, $item) {
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
			$result = $this->frequency($result, $item);
		}

		return $result;
	}
}