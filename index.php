<?php

require 'config/router.php';    
include('./helpers/functions.php');

routeToController($uri, $routes);

/**
 * Database Class
 */
class Database
{
	public $pdo;

	public function __construct()
	{
		// Database Connect
		$dsn = "mysql:host=localhost;port=3306;dbname=PHP_CRUD;charset=utf8mb4";

		$this->pdo = new PDO($dsn, 'ronow', 'TW3nty@17');
	}

	// Database Query
	function query($statement)
	{
		$prepared_statement = $this->pdo->prepare($statement);

		$prepared_statement->execute();	

		return $prepared_statement->fetchAll(PDO::FETCH_ASSOC);
	}
}


$db = new Database();

$statement = "SELECT * FROM posts";

$posts = $db->query($statement);

echo "<ol>";
	foreach ($posts as $post) {
		echo "<li> " . $post['title'] . "</li>";
	}
echo "</ol>";