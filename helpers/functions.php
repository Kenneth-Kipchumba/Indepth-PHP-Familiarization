<?php

/**
 * formatted var_dump()
 * 
 * @param $var
 */
function dd($value)
{
	echo "<pre>";
	var_dump($value);
	echo "</pre>";
}

/**
* You can optionally pass in status code like 404 e.t.c
* 
* For Example:
* 
* not_found(status_code);
*/
function not_found($error_code = 404)
{
	if (! ($error_code === 404)) {
		http_response_code($error_code);

		$error_msg = "$error_code. There was an error";

		require "views/general_errors.php";
	} else {
		http_response_code($error_code);

		$error_msg = "$error_code. Not Found";

		require "views/$error_code.php";
		die();
	}
	
}

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
		not_found(422);
	}
}
