<?php

namespace Telema\Crocoder\Fp;

const ITEMS = 'George Raymond Richard Martin';

class Ex4
{
    public static function solution(string $nameString = ITEMS)
    {
        $names = explode(' ', $nameString);
        $initials = array_map(fn ($name) => $name[0], $names);

        return implode('', $initials);
    }
}
