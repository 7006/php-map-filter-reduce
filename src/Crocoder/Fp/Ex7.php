<?php

namespace Telema\Crocoder\Fp;

use Telema\Crocoder\Ex7 as BaseEx7;

class Ex7 extends BaseEx7
{
    public function __invoke()
    {   
        $numbers = $this->readCsv(self::FILE_PATH, fn ($item) => $item['x']);

        return  array_map(fn ($n) => $this->factorial($n), $numbers);
    }
}
