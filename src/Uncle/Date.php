<?php

namespace Telema\Uncle;

class Date {

	public static function isGte($date1, $date2)
    {
        $date1 = \DateTimeImmutable::createFromFormat('Y-m-d', $date1);
        $date2 = \DateTimeImmutable::createFromFormat('Y-m-d', $date2);
        return $date1 >= $date2;
    }
}