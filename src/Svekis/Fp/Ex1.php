<?php

namespace Telema\Svekis\Fp;

const ITEMS = [3, 56, 23, 4, 1, 67, 5];

class Ex1
{
    public static function solution(array $numbers = ITEMS)
    {
        return array_map(fn ($n) => $n * 2, $numbers);
    }
}
