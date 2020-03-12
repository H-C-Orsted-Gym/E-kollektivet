<?php

	include_once '../classes/database.inc.php';
	include_once '../classes/users.inc.php';

	$Users = new Users();

	$Username = $_POST['loginUsername'];
	$Password = $_POST['loginPassword'];

	$result = $Users->login($Username, $Password);

	if ($result == 500) {
		print(500);
	} else if ($result == 401) {
		print(401);
	} else if ($result == 200) {
		print(200);
	} else {
		print($result);
	}

?>