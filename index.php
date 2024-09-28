<?php

require_once './src/CroCoder/Ex1.php';

use Telema\CroCoder\Ex1;

$items = Ex1::$ITEMS;
//$result = Ex1::solution($items);
$result = Ex1::fpSolution($items);
print_r($items);
print_r($result);