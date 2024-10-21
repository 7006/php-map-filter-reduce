<?php

namespace Telema\CroCoder;

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

    public static function fpSolution(array $items = ITEMS)
    {
        return array_map(fn ($item) => $item ** 2, $items);
    }
}