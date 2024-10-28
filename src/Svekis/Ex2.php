<?php

namespace Telema\Svekis;

class Ex2
{
    public const ITEMS = ['london', 'manchester', 'liverpool', 'tbilisi'];

    public static function solution()
    {
        $result = [];
        foreach (self::ITEMS as $city) {
            $result[] = strtoupper($city);
        }

        return $result;
    }
}
