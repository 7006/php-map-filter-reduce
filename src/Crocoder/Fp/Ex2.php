<?php

namespace Telema\Crocoder\Fp;

use Telema\Crocoder\Ex2 as BaseEx2;

class Ex2 extends BaseEx2
{
    public function __invoke()
    {
        $items = $this->readCsv(self::FILE_PATH, fn ($item) => $item['number']);
        return array_reduce($items, fn ($sum, $n) => $n > 0 ? $sum + $n : $sum, 0);
    }
}
