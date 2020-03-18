<?php

	//Include files
	include_once 'database.inc.php';
	include_once 'users.inc.php';

	class PasswordReset extends Database {
		
		public function checkAccount($Email, $Username) {
			$sql = "SELECT * FROM `Users` WHERE `Email`='$Email' AND `Users`='$Username'";

		}
			

		private function sendMail($Email, $Username, $Token) {
			// the message
			$msg = "First line of text\nSecond line of text";

			// use wordwrap() if lines are longer than 70 characters
			$msg = wordwrap($msg,70);

			// send email
			mail("philip@han.dk", "My subject", $msg);
		}

	}

?>