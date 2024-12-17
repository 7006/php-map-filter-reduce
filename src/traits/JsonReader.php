<?php

namespace Telema\traits;

trait JsonReader
{
    public function readJson(string $path)
    {
        $data = file_get_contents($path);
        $arrayData = json_decode($data, true);

        return $arrayData;
    }
}
