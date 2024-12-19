<?php

namespace Telema\Crocoder\Fp;

use Telema\Crocoder\Ex8 as BaseEx8;

class Ex8 extends BaseEx8
{
    public function __invoke()
    {
        $items = $this->readCsv(self::FILE_PATH, fn ($item) => $item);

        return array_reduce(array_column($items, 'char'), $this->frequency(...), []);
    }
}
