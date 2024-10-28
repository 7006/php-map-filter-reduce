<?php

namespace Telema\Svekis\Fp;

use Telema\Svekis\Ex2 as BaseEx2;

class Ex2
{
    public static function solution()
    {
        return array_map(strtoupper(...), self::ITEMS);
    }
}
