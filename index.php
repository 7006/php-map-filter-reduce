<?php

require_once './src/Svekis/Ex3.php';

use Telema\Svekis\Ex3;

$items = Ex3::$ITEMS;
// $result = Ex3::solution($items);
$result = Ex3::fpSolution($items);
print_r($items);
print_r($result);