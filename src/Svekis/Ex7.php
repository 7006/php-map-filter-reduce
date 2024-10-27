<?php

namespace Telema\Svekis;

class Ex7
{    
    const ITEMS = ['John Doe', 'Alice Smith', 'Bob Johnson', 'Donald Duck III'];

    protected static function initials(string $name)
    {
        [$firstName, $lastName] = explode(' ', $name, 2);
        return $firstName[0] . $lastName[0];
    }

    public static function solution()
    {
        $initials = [];
        foreach (self::ITEMS as $name) {
            $initials[] = self::initials($name);
        }
        return $initials;
    }    
}
