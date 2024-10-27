<?php

namespace Telema\Svekis\Fp;

const ITEMS = ['london', 'manchester', 'liverpool', 'tbilisi'];

class Ex2
{
    public static function solution(array $cities = ITEMS)
    {
        return array_map(strtoupper(...), $cities);
    }
}
