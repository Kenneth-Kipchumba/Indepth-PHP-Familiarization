<?php

require 'config/database.php';

$db = new Database($config['database'],$user,$pass);


$statement = "SELECT * FROM notes WHERE user_id = 3";

$notes = $db->query($statement)->fetchAll(PDO::FETCH_ASSOC);

//dd($notes);

require 'views/notes.php';