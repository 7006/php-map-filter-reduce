<?php

namespace Telema\Svekis\Fp;

use Telema\Rectangle;
use Telema\Svekis\Ex6 as BaseEx6;

class Ex6 extends BaseEx6
{
    public function __invoke()
    {
        return array_map(Rectangle::info(...), self::ITEMS);
    }
}
