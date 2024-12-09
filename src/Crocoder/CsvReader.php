<?php

namespace Telema\Crocoder;

// нужно сделать папку /src/traits
// и положить туда єтот файл
trait CsvReader
{
    public function readCsv(string $path, $fn)
    {
        $handle = fopen($path, 'rt');
        $headers = fgetcsv($handle, 100, ',');

        $items = [];

        while (!feof($handle)) {
            $line = fgetcsv($handle, 100, ',');

            // надо посмотреть
            // есть ли в стандартной библиотеке функция
            // которая делает то же самое
            // что и єтот foreach
            foreach ($headers as $key => $header) {
                $item[$header] = $line[$key];
            }
            $items[] = $fn($item);
        }

        return $items;
    }
}
