<?php

namespace Telema\Crocoder;

class Ex5
{
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/crocoder/ex05.csv';

    public function __invoke()
    {
        // переписать тем же методом что и Ex2
        $items = $this->readCsv(self::FILE_PATH, fn ($item) => $item);

        $min = $items[0]['age'];
        $max = $items[0]['age'];

        foreach ($items as $item) {
            if ($item['age'] < $min) {
                $min = $item['age'];
            }

            if ($item['age'] > $max) {
                $max = $item['age'];
            }
        }
        return [$min, $max, $max - $min];
    }
}
