<?php

namespace Telema\CroCoder;

const STRING = 'Every developer likes to mix kubernetes and javascript';

class Ex6
{
    public static function solution(string $string = STRING)
    {
        $newString = [];
        $newWord = '';

        foreach (explode(' ', $string) as $word) {
            if(strlen($word) >= 5) {
                $numeronym = $word[0] . (strlen($word) - 2) . $word[strlen($word) -1];
                $newString[] = $numeronym;
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
            ? $word[0] . (strlen($word) - 2) . $word[strlen($word) -1] 
            : $word,
            $words
        );
        return implode(' ', $newString);
    }
}