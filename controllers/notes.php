<?php

require 'config/database.php';

$db = new Database($config['database'],$user,$pass);


$statement = "SELECT * FROM notes WHERE user_id = 1";
//$statement = "SELECT * FROM notes";

//$notes = $db->query($statement)->find(PDO::FETCH_ASSOC);
$notes = $db->query($statement)->get();

//dd($notes);

require 'views/notes.view.php';