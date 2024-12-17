<?php

namespace Telema\Crocoder\Fp;

use Telema\Crocoder\Ex6 as BaseEx6;

class Ex6 extends BaseEx6
{
    public function __invoke()
    {
        $words = $this->readCsv(self::FILE_PATH, fn ($item) => $item['word']);

        $numeronyms = array_map(self::numeronym(...), $words);

        return implode(' ', $numeronyms);
    }
}
