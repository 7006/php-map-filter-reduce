<?php

namespace Telema\Crocoder;

class Ex12
{
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

    public function __invoke()
    {
        $freq = [];

        $fn = function ($item, $index) { // <-- вот тут нужно передать $freq внутрь колбека погугли как єто делается

            // внутри колбека вести подсчет частотьІ
            var_dump($item, $index);
        };

        array_walk_recursive(self::ITEMS, $fn);

        return $freq;
    }
}
