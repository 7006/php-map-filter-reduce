<?php

namespace Telema\Crocoder\Fp;

use Telema\Crocoder\Ex9 as BaseEx9;
use Telema\Math;

class Ex9 extends BaseEx9
{
    public function __invoke()
    {
        $items = $this->readCsv(self::FILE_PATH, fn ($item) => $item);

        $fn = function ($result, $item) {
            $item['scores'] = [$item['read_score'], $item['listen_score'], $item['talk_score']];

            if ($this->avgScore($item) > self::AVERAGE_SCORE) {
                $result[] = [
                    'name' => $item['name'],
                    'average' => $this->avgScore($item)
                ];
            }
            return $result;
        };

        return array_reduce($items, $fn, []);
    }
}
