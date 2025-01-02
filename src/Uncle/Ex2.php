<?php

namespace Telema\Uncle;

use Telema\traits\CsvReader;

class Ex2
{
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/uncle/ex02.csv';

    public function __invoke()
    {
        $accum = ['success' => [], 'error' => []];

        $this->readCsv(self::FILE_PATH, function ($item) use (&$accum) {
            if ($item['status'] === 'success') {
                $accum['success'][] = $item['id'];
            }
            if ($item['status'] === 'error') {
                $accum['error'][] = $item['id'];
            }
        });

        return $accum;
    }
}
