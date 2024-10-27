<?php

require_once './vendor/autoload.php';

$parts = explode('/', trim($_SERVER['PATH_INFO'] ?? '', '/'));

[$class, $method] = match (count($parts)) {
    2 => [sprintf('Telema\%s\Ex%s', ucfirst($parts[0]), $parts[1]), 'solution'],
    3 => [sprintf('Telema\%s\Fp\Ex%s', ucfirst($parts[0]), $parts[2]), 'solution'],
    default => ['', '']
};

if (method_exists($class, $method)) {
    $returnValue = call_user_func([$class, $method]);
    // $returnValue = $class::$method(...)();
    printf('<pre>%s</pre>', print_r($returnValue, true));
} else {
    printf('Class %s and/or method %s not found', $class, $method);
}
