<?php

	class Database {
		private $dbHost;
		private $dbUser;
		private $dbPass;
		private $dbName;

		protected function connect() {
			$this->dbHost = "localhost";
			$this->dbUser = "root";
			$this->dbPass = "";
			$this->dbName = "E-Kollektivet";

			$conn = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);

			return $conn;
		}
	}
?>