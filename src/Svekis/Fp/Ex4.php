<?php

namespace Telema\Svekis\Fp;

use Telema\Svekis\Ex4 as BaseEx4;

class Ex4 extends BaseEx4
{
    public function __invoke()
    {   
        $items = $this->readCsv(self::FILE_PATH, fn ($item) => $item['temp']);
        return array_map(self::celsiusToFahrenheit(...), $items);
    }
}
