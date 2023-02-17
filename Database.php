<?php
require 'config/database.php';
/**
 * Database Class
 */
class Database
{
	public $pdo;
	public $prepared_statement;

	public function __construct($config,$user,$pass)
	{
		//dd($config);exit;
		// Database Connect
		$dsn2 = 'mysql:' . http_build_query($config,'',';');

		//dd($dsn2);

		try {
			$this->pdo = new PDO($dsn2,$user,$pass);

			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo "Connection Failed: " . $e->getMessage() . "|"  . $e->getCode() ;
		}
	}

	// Database Query
	function query($statement)
	{
		$this->prepared_statement = $this->pdo->prepare($statement);

		$this->prepared_statement->execute();	

		return $this;
	}

	function find()
	{
		return $this->prepared_statement->fetch();
	}

	public function findOrFail()
	{
		$result = $this->find();

		if ( ! $result) {
			abort(Response::NOT_FOUND, 'Not Found');
		}

		return $result;
	}

	public function get()
	{
		//$notes = $db->query($statement)->find(PDO::FETCH_ASSOC);

		return $this->prepared_statement->fetchAll();
	}
}