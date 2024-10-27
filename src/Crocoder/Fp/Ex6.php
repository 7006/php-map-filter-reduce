<?php

namespace Telema\Crocoder\Fp;

use Telema\Crocoder\Ex6 as BaseEx6;

const STRING = 'Every developer likes to mix kubernetes and javascript';

class Ex6 extends BaseEx6
{
    public static function solution(string $string = STRING)
    {
        $words = explode(' ', $string);

        $numeronyms = array_map(self::numeronym(...), $words);

        return implode(' ', $numeronyms);
    }
}
