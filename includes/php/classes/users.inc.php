<?php

	include_once 'database.inc.php';

	class Users extends Database {
		public function login($Username, $Password) {
			$hashPassword = $this->generateHash($Password);
			
			$sql = "SELECT * FROM `Users` WHERE `Username`='$Username' AND `Password`='$hashPassword'";
			$result = $this->connect()->query($sql);
			if ($result == TRUE) {
				$count = $result->num_rows;
				if ($count == 1) {
					while ($row = $result->fetch_assoc()) {
						$_SESSION
					}
				} else {
					return 401;
				}
				
			} else {
				return 500;
			}
			
			
		}


		private function generateHash($Password) {
			$HashText1 = hash('sha256', "ZEfdt3nOpZ8eQQPuXASk79D184wSHmxy2HsgcnugZAl18cAcbHIvlem6L7tw4Shj");
			$HashText2 = hash('sha256', "WajpuwpYhg0s2kS2TEjIw6rvoFQ1kdrXP7ezgml7FHgFmqNHOLPDmyutEgHi0sEw");
			$HashText3 = hash('sha256', "94Mk168gdSOYdVbrs5OKWlDTeTFTB0uIEpfttIDURqPUuAQC92ZNFd9Yd6laODlT");
			$HashPassword1 = hash('sha256', $Password);
			$HashPassword2 = hash('sha256', $HashPassword1 . $HashText1);
			$HashPassword3 = hash('sha256', $HashPassword2 . $HashText2);
			$HashPasswordReal = hash('sha256', $HashPassword3 . $HashText3);

			return $HashPasswordReal;
		}
	}

?>