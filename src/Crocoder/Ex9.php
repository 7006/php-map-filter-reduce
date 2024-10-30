<?php

namespace Telema\Crocoder;

use Telema\Math;

class Ex9
{	
	public const ITEMS = [
		[
			'name' => 'Alice',
			'scores' => [90, 85, 92] 
		],
		[
			'name' => 'Bob',
			'scores' => [75, 80, 85] 
		],
		[
			'name' => 'Charlie',
			'scores' => [90, 95, 85] 
		],
		[
			'name' => 'Jack',
			'scores' => [100, 100, 100] 
		],
	];

	public function __invoke() {
		$result = [];

		foreach (self::ITEMS as $item) {
			$avg = Math::avg(array_sum($item['scores']), 3);
			
			if ($avg > 90) {
				$item['scores'] = $avg;
				$result[] = array_combine(['name', 'avarage'], $item);	
			} 
		}
		
		return $result;
	}
}
