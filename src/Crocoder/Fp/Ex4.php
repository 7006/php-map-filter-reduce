<?php

namespace Telema\Crocoder\Fp;

use Telema\Crocoder\Ex4 as BaseEx4;

class Ex4 extends BaseEx4
{
    public function __invoke()
    {
        $items = $this->readCsv(self::FILE_PATH, fn ($item) => $item['name']);
        $initials = array_map(fn ($name) => $name[0], $items);

        return implode('', $initials);
    }
}
