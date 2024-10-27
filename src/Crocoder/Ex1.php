<?php

namespace Telema\Crocoder;

const ITEMS = [1, 2, 3, 4, 5];

class Ex1
{
    public static function solution(array $items = ITEMS)
    {
        $result = [];
        foreach ($items as $item) {
            $result[] = $item ** 2;
        }
        return $result;
    }
}
