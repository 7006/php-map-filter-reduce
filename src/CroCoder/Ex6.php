<?php

namespace Telema\CroCoder;

const STRING = 'Every developer likes to mix kubernetes and javascript';

class Ex6
{

    private static function numeronym(string $word) {
        return $word[0] . (strlen($word) - 2) . $word[strlen($word) -1];
    }

    public static function solution(string $string = STRING)
    {
        $newString = [];
        $newWord = '';

        foreach (explode(' ', $string) as $word) {
            if(strlen($word) >= 5) {
                $newString[] = self::numeronym($word);
            } else {
                $newString[] = $word;
            }
        }

        return implode(' ', $newString);
    }

    public static function fpSolution(string $string = STRING)
    {
        $words = explode(' ', $string);
        $newString = array_map(
            fn ($word) => strlen($word) >= 5 
            ? self::numeronym($word) 
            : $word,
            $words
        );
        
        return implode(' ', $newString);
    }
}