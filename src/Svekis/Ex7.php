<?php

namespace Telema\Svekis;

const ITEMS = ['John Doe', 'Alice Smith', 'Bob Johnson', 'Donald Duck III'];

class Ex7
{
    public static function solution(array $names = ITEMS)
    {
        $initials = [];
        foreach ($names as $name) {
            $initials[] = self::initials($name);
        }
        return $initials;
    }

    public static function fpSolution(array $names = ITEMS)
    {
        return array_map(self::initials(...), $names);
    }

    private static function initials(string $name)
    {
        [$firstName, $lastName] = explode(' ', $name, 2);
        return $firstName[0] . $lastName[0];
    }
}