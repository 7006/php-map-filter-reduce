<?php

namespace Telema\Svekis\Fp;

use Telema\Svekis\Ex7 as BaseEx7;

class Ex7 extends BaseEx7
{
    public function __invoke()
    {
        return array_map(self::initials(...), self::ITEMS);
    }
}
