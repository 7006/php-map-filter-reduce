<?php

namespace Telema\Crocoder;

class Ex81 {

	public const ITEMS = [
        ['a', 'b', 'c'],
        [
        	['c', 'd'],
        	'd', 
        	'f'
        ],
        [
        	['d', 'g'],
        	'f', 
        	['c', 'a'],
        ],
        [
        	'c', 
        	'd', 
        	[
        		'c', 
        		[
        			['d', 'g'],
        			'a', 
        			'f'
        		], 
        		'f'
        	],
        ],
        ['d', 'a', 'g']
    ];
  
	private $result = [];

	public function __invoke($item, $_) {
    	if (isset($this->result[$item])) {
            $this->result[$item] += 1;
        } else {
            $this->result[$item] = 1;
        }
        return $this->result;    	
 }
}

$items = Ex81::ITEMS;
$frequency = new Ex81();
array_walk_recursive($items, $frequency($item, $_));