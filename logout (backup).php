<?php

	//Include classes
	include_once 'includes/php/classes/database.inc.php';
	include_once 'includes/php/classes/users.inc.php';

	$Users = new Users();

	$result = $Users->logout();

	if ($result == 401) {
		print("You were not logged in. Click here to get to login page ");
		print('<a href="index.php">Go to login!</a>');
	} else {
		header("Location: index.php");
	}

?>