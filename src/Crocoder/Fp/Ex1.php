<?php

namespace Telema\Crocoder\Fp;

use Telema\Crocoder\Ex1 as BaseEx1;

class Ex1 extends BaseEx1
{
    public function __invoke()
    {
        return array_map(fn ($item) => $item ** 2, self::ITEMS);
    }
}
