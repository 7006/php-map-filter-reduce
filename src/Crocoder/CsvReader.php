<?php

namespace Telema\Crocoder;

trait CsvReader
{
    public function readCsv(string $path)
    {
        $handle = fopen($path, 'rt');
        $headers = fgetcsv($handle, 100, ',');

        $data = [];

        while (!feof($handle)) {
            $line = fgetcsv($handle, 100, ',');

            foreach ($headers as $key => $header) {
                $temp[$header] = $line[$key];
            }

            $data[] = $temp;
        }

        return $data;
    }
}
