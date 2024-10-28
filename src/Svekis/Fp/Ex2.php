<?php

namespace Telema\Svekis\Fp;

use Telema\Svekis\Ex2 as BaseEx2;

class Ex2
{
    public function __invoke()
    {
        return array_map(strtoupper(...), self::ITEMS);
    }
}
