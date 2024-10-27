<?php

namespace Telema\Crocoder;

class Ex4
{   
    const ITEMS = 'George Raymond Richard Martin';

    public static function solution()
    {
        $names = explode(' ', self::ITEMS);

        $initials = [];
        foreach ($names as $name) {
            $initial = $name[0];
            $initials[] = $initial;
        }

        return implode('', $initials);
    }
}
