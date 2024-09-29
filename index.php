<?php

require_once './src/Svekis/Ex1.php';

use Telema\Svekis\Ex1;

$items = Ex1::$ITEMS;
// $result = Ex1::solution($items);
$result = Ex1::fpSolution($items);
print_r($items);
print_r($result);