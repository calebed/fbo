<?php 
	class Dbh {

		private $conn;

		public function __construct() {
			$this->conn = mysqli_connect('localhost', 'caleb', 'password', 'flartbranchoutdoors');

			if(!$conn) {
				echo 'Connection error: ' + mysqli_connect_error();
			}
		}

		
	}
?>