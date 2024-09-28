<?php

require_once './src/CroCoder/Ex4.php';

use Telema\CroCoder\Ex4;

$items = Ex4::$ITEMS;
$result = Ex4::solution($items);
//$result = Ex4::fpSolution($items);
print_r($result);