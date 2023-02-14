<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
	//dd($uri);

/**
 * Routes Definition
 */
$routes = [
	'/' => 'controllers/home.php',
	'/about' => 'controllers/about.php',
	'/notes' => 'controllers/notes.php',
	'/note' => 'controllers/note.php',
];

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
		not_found();
	}
}