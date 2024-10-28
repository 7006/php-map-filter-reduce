<?php

namespace Telema\Crocoder\Fp;

use Telema\Crocoder\Ex2 as BaseEx2;

class Ex2 extends BaseEx2
{
    public function __invoke()
    {
        return array_reduce(self::ITEMS, fn ($sum, $n) => $n > 0 ? $sum + $n : $sum, 0);
    }
}
