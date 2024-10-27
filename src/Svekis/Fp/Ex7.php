<?php

namespace Telema\Svekis\Fp;

const ITEMS = ['John Doe', 'Alice Smith', 'Bob Johnson', 'Donald Duck III'];

class Ex7
{
    private static function initials(string $name)
    {
        [$firstName, $lastName] = explode(' ', $name, 2);
        return $firstName[0] . $lastName[0];
    }

    public static function solution(array $names = ITEMS)
    {
        return array_map(self::initials(...), $names);
    }   
}
