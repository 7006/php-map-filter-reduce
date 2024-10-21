<?php

namespace Telema\CroCoder;

const STRING = 'Every developer likes to mix kubernetes and javascript';
// output:  'E3y d7r l3s to mix k8s and j8t'

class Ex6
{
    public static function solution(string $string = STRING)
    {
        $words = explode(' ', $string);
        $result = [];
        $newWord = '';

        foreach ($words as $word) {
            if(strlen($word) >= 5) {
                $newWord = $word[0] . (strlen($word) - 2) . $word[strlen($word) -1];
                $result[] = $newWord;
            } else {
                $result[] = $word;
            }
        }
        
        return implode(' ', $result);
    }

    public static function fpSolution(string $string = STRING)
    {

    }
}