<?php

require_once './src/Svekis/Ex7.php';

use Telema\Svekis\Ex7;

$items = Ex7::$ITEMS;
// $result = Ex7::solution($items);
$result = Ex7::fpSolution($items);
print_r($result);