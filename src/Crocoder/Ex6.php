<?php

namespace Telema\Crocoder;

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
        $numeronyms = [];
        $words = explode(' ', $string);

        foreach ($words as $word) {
            $numeronyms[] = self::numeronym($word);
        }

        return implode(' ', $numeronyms);
    }

    public static function fpSolution(string $string = STRING)
    {
        $words = explode(' ', $string);

        $numeronyms = array_map(self::numeronym(...), $words);

        return implode(' ', $numeronyms);
    }
}
