<?php

namespace Telema\Crocoder\Fp;

use Telema\Crocoder\Ex4 as BaseEx4;

class Ex4 extends BaseEx4
{
    public function __invoke()
    {
        $names = explode(' ', self::ITEMS);
        $initials = array_map(fn ($name) => $name[0], $names);

        return implode('', $initials);
    }
}
