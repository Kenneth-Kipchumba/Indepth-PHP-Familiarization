<?php

$db = new Database($config['database'],$user,$pass);

$id = $_GET['id'];
$user_id = 1;


$statement = 'SELECT * FROM notes WHERE id = ' . $id . ' AND user_id = ' . $user_id;
//$statement = ['SELECT * FROM notes WHERE id:', ['id' => $id]];
 //dd($statement);exit;


$note = $db
		->query($statement)
		->fetch();



if( $note['user_id'] !== 1){
		abort(Response::FORBIDDEN);
}elseif (! $note) {
	abort(Response::NOT_FOUND);
}else{
	require 'views/note.view.php';
}

