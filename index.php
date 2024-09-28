<?php

require_once './src/CroCoder/Ex1.php';

use Telema\CroCoder\Ex1;

$items = Ex1::$ITEMS;
$result = Ex1::solution($items);
var_dump($result);