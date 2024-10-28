<?php

namespace Telema\Crocoder;

class Ex4
{
    public const ITEMS = 'George Raymond Richard Martin';

    public function __invoke()
    {
        $names = explode(' ', self::ITEMS);

        $initials = [];
        foreach ($names as $name) {
            $initial = $name[0];
            $initials[] = $initial;
        }

        return implode('', $initials);
    }
}
