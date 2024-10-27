<?php

namespace Telema\Svekis\Fp;

use Telema\Svekis\Ex3 as BaseEx3;

class Ex3 extends BaseEx3
{
    public static function solution()
    {
        return array_map(fn ($st) => $st['name'], self::ITEMS);
    }
}
