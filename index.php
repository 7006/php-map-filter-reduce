<?php

require_once './src/Svekis/Ex9.php';

use Telema\Svekis\Ex9;

$items = Ex9::$ITEMS;
// $result = Ex9::solution($items);
// $result = Ex9::fpSolution($items);
$result = Ex9::alternativeSyntaxSolution($items);
print_r($result);