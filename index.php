<?php

require_once './src/Ex1.php';

use Telema\Ex1;

$items = Ex1::$ITEMS;
$result = Ex1::solution($items);
var_dump($result);