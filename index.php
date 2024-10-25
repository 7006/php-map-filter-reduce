<?php

require_once './vendor/autoload.php';

function go($prefix, $class) {

	$requestUri = $_SERVER['PATH_INFO'];
	
	if (str_starts_with($requestUri, $prefix)) {
		$url = substr($requestUri, strlen($prefix));
		$result = $class::go($url);

		newRouter($requestUri);
		echo '<pre>';
		print_r($result);
		echo '</pre>';
	}
}

function newRouter($requestUri) {
	
	var_dump($requestUri);
	
	$requests = explode('/', $requestUri);
	echo '<pre>';
	print_r($requests);
	echo '</pre>';

	if (count($requests) === 3) {
		$className = 'Ex' . $requests[2];
		$methodName = 'solution()';
	}

	if (count($requests) === 4) {
		$className = 'Ex' . $requests[3];
		$methodName = 'fpSolution()';
	}

	$root = ucfirst($requests[1]);
	$namespace = "\Telema\\$root\\";

	var_dump($root, $namespace, $className, $methodName);

	
}

go('/crocoder/', \Telema\Crocoder\Router::class);
go('/svekis/', \Telema\Svekis\Router::class);
go('/uncle/', \Telema\Uncle\Router::class);
go('/greenroot/', \Telema\Greenroot\Router::class);