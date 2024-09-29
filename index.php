<?php

require_once './src/Svekis/Ex8.php';

use Telema\Svekis\Ex8;

$items = Ex8::$ITEMS;
// $result = Ex8::solution($items);
$result = Ex8::fpSolution($items);
print_r($result);