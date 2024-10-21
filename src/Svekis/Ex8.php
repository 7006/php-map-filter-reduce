<?php

namespace Telema\Svekis;

use Telema\Date;

const ITEMS = ['2023-01-15', '2023-05-20', '2023-09-10'];

class Ex8
{
    public static function solution(array $dates = ITEMS)
    {
        $newDates = [];
        foreach ($dates as $date) {
            $newDates[] = Date::formatDate($date);
        }

        return $newDates;
    }

    public static function fpSolution(array $dates = ITEMS)
    {
        return array_map(self::formatDate(...), $dates);
    }
}