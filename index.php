<?php

require_once './src/Svekis/Ex2.php';

use Telema\Svekis\Ex2;

$items = Ex2::$ITEMS;
$result = Ex2::solution($items);
$result = Ex2::fpSolution($items);
$result = Ex2::fpSolution2($items);
print_r($items);
print_r($result);