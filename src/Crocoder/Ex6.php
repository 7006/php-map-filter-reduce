<?php

namespace Telema\Crocoder;

class Ex6
{   
    const STRING = 'Every developer likes to mix kubernetes and javascript';

    protected static function numeronym(string $word)
    {
        $l = strlen($word);

        return $l > 4
            ? $word[0] . ($l - 2) . $word[$l - 1]
            : $word;
    }

    public static function solution()
    {
        $numeronyms = [];
        $words = explode(' ', self::STRING);

        foreach ($words as $word) {
            $numeronyms[] = self::numeronym($word);
        }

        return implode(' ', $numeronyms);
    }
}
