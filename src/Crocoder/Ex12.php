<?php

namespace Telema\Crocoder;

class Ex12
{
    public $items = [
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

    public function __invoke()
    {
        $freq = [];

        $fn = function ($item, $index) use (& $freq) { 
            if (isset($freq[$item])) {
                $freq[$item] += 1;
            } else {
                $freq[$item] = 1;
            }
        };

        array_walk_recursive($this->items, $fn);

        return $freq;
    }
}
