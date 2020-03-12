<?php

	include_once '../classes/database.inc.php';
	include_once '../classes/users.inc.php';

	$Users = new Users();

	$Username = $_POST['signupUsername'];
	$Password = $_POST['signupPassword'];
	$Firstname = $_POST['signupFirstname'];
	$Lastname = $_POST['signupLastname'];
	$Email = $_POST['signupEmail'];
	$CPR = $_POST['signupCPR'];
	$Birthday = $_POST['signupBirthday'];
	$Gender = $_POST['signupGender'];

	$result = $Users->registerUser($Username, $Password, $Firstname, $Lastname, $Email, $CPR, $Birthday, $Gender, '', '');

	if ($result == 500) {
		print(500);
	} else if ($result == 200) {
		print(200);
	} else {
		print($result);
	}

?>