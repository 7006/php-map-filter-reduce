<?php

require_once './src/CroCoder/Ex3.php';

use Telema\CroCoder\Ex3;

$items = Ex3::$ITEMS;
$result = Ex3::solution($items);
//$result = Ex3::fpSolution($items);
print_r($result);