<?php

	include_once 'database.inc.php';

	class SystemSettings extends Database {
		public function getVersion() {
			$sql = "SELECT * FROM `Settings` WHERE `Name`='Version'";
			$result = $this->connect()->query($sql);
			if ($result == TRUE) {
				while ($row = $result->fetch_assoc()) {
					$versionNR = $row['Value'];

					return $versionNR;
				}
			} else {
				return 500;
			}
		}
	}

?>