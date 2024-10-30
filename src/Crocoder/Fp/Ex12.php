<?php

namespace Telema\Crocoder\Fp;

use Telema\Crocoder\Ex12 as BaseEx12;

class Ex12 extends BaseEx12
{
    public function __invoke()
    {
        $counter = new Counter();

        array_walk_recursive($this->items, $counter);

        return $counter->freq;
    }
}

class Counter
{
    public $freq = [];

    public function __invoke($item, $index) {
        if (isset($this->freq[$item])) {
            $this->freq[$item] += 1;
        } else {
            $this->freq[$item] = 1;
        }
    }
}
