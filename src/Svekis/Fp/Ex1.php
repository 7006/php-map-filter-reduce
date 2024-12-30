<?php

namespace Telema\Svekis\Fp;

use Telema\Svekis\Ex1 as BaseEx1;

class Ex1 extends BaseEx1
{
    public function __invoke()
    {   
        $numbers = $this->readCsv(self::FILE_PATH, fn ($item) => $item['number']);
        return array_map(fn ($n) => $n * 2, $numbers);
    }
}
