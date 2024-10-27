<?php

namespace Telema\Crocoder\Fp;

const ITEMS = [1, 2, 3, 4, 5];

class Ex1
{
    public static function solution(array $items = ITEMS)
        {
            return array_map(fn ($item) => $item ** 2, $items);
        }
}
