<?php
include('./includes/header.php');
include('./includes/nav.php');
require 'config/database.php';

/**
 * Database Configuration values found in
 * the config/database.php file
 */
$db = new Database($config['database'],$user,$pass);


$statement = "SELECT * FROM posts";

$posts = $db->query($statement)->fetchAll(PDO::FETCH_ASSOC);

//dd($posts);
if ($posts) {
	echo "<ol>";
	foreach ($posts as $post) {
		echo "<li> " . $post['title'] . "</li>";
	}
	echo "</ol>";
} else {
	echo "Not found";
}


?>


<?php include('./includes/footer.php'); ?>
