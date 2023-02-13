<?php

/**
 * Database Class
 */
class Database
{
	public $pdo;

	public function __construct($config,$user,$pass)
	{
		//dd($config);exit;
		// Database Connect
		$dsn2 = 'mysql:' . http_build_query($config,'',';');

		dd($dsn2);

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
		$prepared_statement = $this->pdo->prepare($statement);

		$prepared_statement->execute();	

		return $prepared_statement;
	}
}