<?php

require_once './vendor/autoload.php';

$parts = explode('/', trim($_SERVER['PATH_INFO'] ?? '', '/'));

$class = match (count($parts)) {
    2 => sprintf('Telema\%s\Ex%s', ucfirst($parts[0]), $parts[1]),
    3 => sprintf('Telema\%s\Fp\Ex%s', ucfirst($parts[0]), $parts[2]),
    default => ''
};

if (class_exists($class)) {
    $ex = new $class();
    printf('<pre>%s</pre>', print_r($ex(), true));
} else {
    printf('Example %s not found', $class);
}
