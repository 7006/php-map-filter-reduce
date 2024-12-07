<?php

namespace Telema\Crocoder;

trait CsvReader
{
    public function readCsv(string $path)
    {
        $handle = fopen($path, 'rt');
        $headers = fgetcsv($handle, 100, ',');

        $items = [];

        while (!feof($handle)) {
            $line = fgetcsv($handle, 100, ',');

            foreach ($headers as $key => $header) {
                $item[$header] = $line[$key];
            }

            $items[] = $item;
        }

        return $items;
    }
}
