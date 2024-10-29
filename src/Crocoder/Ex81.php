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
        ['d', 'a', 'g'],
    ];

    public function __invoke() {
    	return self::ITEMS;
    }

    // array_walk_recursive(input, funcname);
}