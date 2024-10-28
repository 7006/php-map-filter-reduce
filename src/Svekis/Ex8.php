<?php

namespace Telema\Svekis;

use Telema\Date;

class Ex8
{
    public const ITEMS = ['2023-01-15', '2023-05-20', '2023-09-10'];

    public static function solution()
    {
        $newDates = [];
        foreach (self::ITEMS as $date) {
            $newDates[] = Date::formatDate($date);
        }

        return $newDates;
    }
}
