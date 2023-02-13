<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
	//dd($uri);

$routes = [
	'/' => 'controllers/index.php',
	'/about' => 'controllers/about.php',
];