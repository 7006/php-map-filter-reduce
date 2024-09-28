<?php

require_once './src/CroCoder/Ex2.php';

use Telema\CroCoder\Ex2;

$items = Ex2::$ITEMS;
//$result = Ex2::solution($items);
$result = Ex2::fpSolution2($items);
print_r($result);