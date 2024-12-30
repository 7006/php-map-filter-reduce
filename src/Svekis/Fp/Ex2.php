<?php

namespace Telema\Svekis\Fp;

use Telema\Svekis\Ex2 as BaseEx2;

class Ex2 extends BaseEx2
{
    public function __invoke()
    {   
        $cities = $this->readCsv(self::FILE_PATH, fn ($item) => $item['city']);
        return array_map(strtoupper(...), $cities);
    }
}
