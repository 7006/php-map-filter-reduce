<?php

namespace Telema\Svekis\Fp;

use Telema\Svekis\Ex1 as BaseEx1;

class Ex1 extends BaseEx1
{
    public function __invoke()
    {
        return array_map(fn ($n) => $n * 2, self::ITEMS);
    }
}
