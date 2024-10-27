<?php

namespace Telema\Uncle\Fp;

use Telema\Date;
use Telema\Uncle\Ex3 as BaseEx3;

class Ex3 extends BaseEx3
{
    public static function solution(array $items = self::ITEMS)
    {
        $provider = self::provider();
        $date = self::date();

        return array_filter($items, fn ($item) => self::isMatches($item, $provider, $date));
    }
}
