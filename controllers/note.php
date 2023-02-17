<?php
require 'config/database.php';

$db = new Database($config['database'],$user,$pass);

$id = $_GET['id'];
$user_id = 1;


//$statement = 'SELECT * FROM notes';
$statement = 'SELECT * FROM notes WHERE id = ' . $id . ' AND user_id = ' . $user_id;
//$statement = ['SELECT * FROM notes WHERE id:', ['id' => $id]];
//dd($statement);exit;

//dd($db);

$note = $db
		->query($statement)
		->findOrFail();

//dd($note);

authorize($note['user_id'] === $user_id);

