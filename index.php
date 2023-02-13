<?php

require 'config/router.php';


include('./helpers/functions.php');
require 'Database.php';

routeToController($uri, $routes);

require 'config/database.php';


//Configuration values found in the config/database.php file
$db = new Database($config['database'],$user,$pass);

$statement = "SELECT * FROM posts";

$posts = $db->query($statement)->fetchAll(PDO::FETCH_ASSOC);

dd($posts);

echo "<ol>";
	foreach ($posts as $post) {
		echo "<li> " . $post['title'] . "</li>";
	}
echo "</ol>";