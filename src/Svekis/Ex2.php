<?php

namespace Telema\Svekis;

const ITEMS = ['london', 'manchester', 'liverpool', 'tbilisi'];

class Ex2
{
    public static function solution(array $cities = ITEMS)
    {
        $result = [];
        foreach ($cities as $city) {
            $result[] = strtoupper($city);
        }

        return $result;
    }
}
