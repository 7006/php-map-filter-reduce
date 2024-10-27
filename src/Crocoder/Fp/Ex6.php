<?php

namespace Telema\Crocoder\Fp;

const STRING = 'Every developer likes to mix kubernetes and javascript';

class Ex6
{
    private static function numeronym(string $word)
    {
        $l = strlen($word);

        return $l > 4
            ? $word[0] . ($l - 2) . $word[$l - 1]
            : $word;
    }

    public static function solution(string $string = STRING)
    {
        $words = explode(' ', $string);

        $numeronyms = array_map(self::numeronym(...), $words);

        return implode(' ', $numeronyms);
    }
}
