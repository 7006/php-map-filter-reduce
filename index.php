<?php

require_once './src/Svekis/Ex4.php';

use Telema\Svekis\Ex4;

$items = Ex4::$ITEMS;
// $result = Ex4::solution($items);
$result = Ex4::fpSolution2($items);
print_r($result);