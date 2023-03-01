<?php

require 'routes.php';
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
	//dd($uri);

/**
 * Route requests to controller
 * 
 * @param $uri, $routes
 */
function routeToController($uri = '/', $routes)
{
	if (array_key_exists($uri, $routes)) {
		require $routes[$uri];
	}else{
		abort();
	}
}