<?php

namespace Telema\Crocoder;

use Telema\Math;
use Telema\traits\CsvReader;

class Ex9
{
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/crocoder/ex09.csv';
    public const AVERAGE_SCORE = 90;

    protected function avgScore($item)
    {
        $sum = array_sum($item['scores']);
        $count = count($item['scores']);
        return Math::avg($sum, $count);
    }

    public function __invoke()
    {
        $result = [];
        
        $this->readCsv(self::FILE_PATH, function ($item) use (&$result) {
            $item['scores'] = [$item['read_score'], $item['listen_score'], $item['talk_score']];
            $avg = $this->avgScore($item);

            if ($avg > self::AVERAGE_SCORE) {
                $result[] = [
                    'name' => $item['name'],
                    'average' => $avg
                ];
            }
        });

        return $result;
    }
}
