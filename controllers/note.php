<?php

require 'config/database.php';

$db = new Database($config['database'],$user,$pass);

$id = $_GET['id'];



$statement = 'SELECT * FROM notes WHERE id=' . $id;
// dd($statement);exit;


$note = $db
		->query($statement)
		->fetch();


require 'views/note.php';