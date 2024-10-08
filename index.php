<?php

require_once './vendor/autoload.php';

function go($prefix, $class) {
	$requestUri = $_SERVER['REQUEST_URI'];
	
	if (str_starts_with($requestUri, $prefix)) {
		$url = substr($requestUri, strlen($prefix));
		$result = $class::go($url);
		
		echo '<pre>';
		print_r($result);
		echo '</pre>';
	}
}

go('/crocoder/', \Telema\CroCoder\Router::class);
go('/svekis/', \Telema\Svekis\Router::class);