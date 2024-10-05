<?php

require_once './vendor/autoload.php';

$requestUri = $_SERVER['REQUEST_URI'];

if (str_starts_with($requestUri, '/crocoder/')) {
	$url = substr($requestUri, strlen('/crocoder/'));
	$result = \Telema\CroCoder\Router::go($url);
}

if (str_starts_with($requestUri, '/svekis/')) {
	$url = substr($requestUri, strlen('/svekis/'));
	$result = \Telema\Svekis\Router::go($url);
}

echo '<pre>';
print_r($result);
echo '</pre>';