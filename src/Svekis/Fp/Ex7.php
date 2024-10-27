<?php

namespace Telema\Svekis\Fp;

use \Telema\Svekis\Ex7 as BaseEx7;

const ITEMS = ['John Doe', 'Alice Smith', 'Bob Johnson', 'Donald Duck III'];

class Ex7 extends BaseEx7
{
    public static function solution(array $names = ITEMS)
    {
        return array_map(self::initials(...), $names);
    }   
}
