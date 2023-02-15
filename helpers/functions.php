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
* abort('Error Message', status_code);
*/
function abort(string $error_msg = 'Not Found', int $error_code = 404)
{
	if (! ($error_code === 404)) {
		http_response_code($error_code);

		$error_msg = "$error_code . $error_msg";

		require "views/general_errors.php";
		die();
	} else {
		http_response_code($error_code);

		$error_msg = "$error_code. $error_msg";

		require "views/$error_code.php";
		die();
	}
	
}

/**
 * Check url segment
 */
function urlIs($segment)
{
	$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

	return $uri === $segment;
}
