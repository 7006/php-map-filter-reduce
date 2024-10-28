<?php

namespace Telema\Crocoder\Fp;

use Telema\Crocoder\Ex6 as BaseEx6;

class Ex6 extends BaseEx6
{
    public function __invoke()
    {
        $words = explode(' ', self::STRING);

        $numeronyms = array_map(self::numeronym(...), $words);

        return implode(' ', $numeronyms);
    }
}
