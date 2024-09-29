<?php

require_once './src/Svekis/Ex6.php';

use Telema\Svekis\Ex6;

$items = Ex6::$ITEMS;
$result = Ex6::solution($items);
// $result = Ex6::fpSolution2($items);
print_r($result);